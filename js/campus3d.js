/**
 * Kapotaksha High School (KHS) - Interactive 3D Campus Viewer
 * Powered by Three.js & OrbitControls
 */

(function () {
    'use strict';

    // Facility Hotspot Metadata
    const HOTSPOTS = [
        {
            id: 'academic',
            name: 'Main Academic Block',
            badge: 'Classrooms & Administration',
            desc: 'Multi-story main academic wing housing well-ventilated, multimedia smart classrooms (Classes 6–10), administrative offices, and teachers\' lounge.',
            image: 'photos/facilities/classroom.jpg',
            position: { x: -22, y: 14, z: -10 },
            camPos: { x: -22, y: 18, z: 28 },
            target: { x: -22, y: 5, z: -10 }
        },
        {
            id: 'science-ict',
            name: 'Science & ICT Complex',
            badge: 'Laboratories & Technology',
            desc: 'Specialized laboratories for Physics, Chemistry, and Biology experiments, alongside the 30+ terminal Computer & ICT digital learning center.',
            image: 'photos/facilities/ict_lab.jpg',
            position: { x: 22, y: 14, z: -18 },
            camPos: { x: 22, y: 18, z: 18 },
            target: { x: 22, y: 5, z: -18 }
        },
        {
            id: 'library',
            name: 'Central Library & Reading Hall',
            badge: 'Knowledge & Research',
            desc: 'Quiet learning haven with over 5,000 reference books, curricula guides, national journals, daily newspapers, and quiet study alcoves.',
            image: 'photos/facilities/library.jpg',
            position: { x: -28, y: 12, z: 25 },
            camPos: { x: -28, y: 16, z: 60 },
            target: { x: -28, y: 4, z: 25 }
        },
        {
            id: 'sports',
            name: 'Sports Ground & Athletic Field',
            badge: 'Physical Education & Athletics',
            desc: 'Expansive natural turf grounds featuring a full soccer pitch, cricket pitch, running track, badminton courts, and annual sports venues.',
            image: 'photos/facilities/sports_ground.jpg',
            position: { x: 5, y: 6, z: 20 },
            camPos: { x: 5, y: 28, z: 65 },
            target: { x: 5, y: 0, z: 20 }
        },
        {
            id: 'auditorium',
            name: 'Open-Air Cultural Pavilion',
            badge: 'Events & Arts',
            desc: 'Elevated ceremonial stage for Saraswati Puja, Durga Puja celebrations, national holidays, assemblies, and inter-school debate tournaments.',
            image: 'photos/SummerOrientaion2026/p1.jpg',
            position: { x: 28, y: 10, z: 22 },
            camPos: { x: 28, y: 16, z: 55 },
            target: { x: 28, y: 4, z: 22 }
        }
    ];

    class Campus3DApp {
        constructor() {
            this.container = document.getElementById('campus-3d-viewport');
            if (!this.container) return;

            this.isNight = false;
            this.isAutoRotating = true;
            this.interactiveObjects = [];
            this.windowMeshes = [];
            this.lampLights = [];

            this.cameraAnimating = false;
            this.camTargetPos = null;
            this.controlsTargetPos = null;

            this.initThree();
            this.buildEnvironment();
            this.buildCampus();
            this.createHotspotMarkers();
            this.bindEvents();
            this.animate();
        }

        initThree() {
            const width = this.container.clientWidth || 900;
            const height = this.container.clientHeight || 560;

            // Scene
            this.scene = new THREE.Scene();
            this.scene.background = new THREE.Color(0xbfe3fc);
            this.scene.fog = new THREE.FogExp2(0xbfe3fc, 0.007);

            // Camera
            this.camera = new THREE.PerspectiveCamera(45, width / height, 1, 1000);
            this.camera.position.set(0, 48, 85);

            // Renderer
            this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true, powerPreference: 'high-performance' });
            this.renderer.setSize(width, height);
            this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            this.renderer.shadowMap.enabled = true;
            this.renderer.shadowMap.type = THREE.PCFSoftShadowMap;
            this.container.appendChild(this.renderer.domElement);

            // Orbit Controls
            if (typeof THREE.OrbitControls !== 'undefined') {
                this.controls = new THREE.OrbitControls(this.camera, this.renderer.domElement);
                this.controls.enableDamping = true;
                this.controls.dampingFactor = 0.06;
                this.controls.maxPolarAngle = Math.PI / 2.05; // Don't go below ground
                this.controls.minDistance = 15;
                this.controls.maxDistance = 160;
                this.controls.target.set(0, 4, 0);
                this.controls.autoRotate = true;
                this.controls.autoRotateSpeed = 0.6;
            }

            // Raycaster
            this.raycaster = new THREE.Raycaster();
            this.mouse = new THREE.Vector2();

            // Lighting Setup
            this.setupLighting();
        }

        setupLighting() {
            // Ambient light
            this.ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
            this.scene.add(this.ambientLight);

            // Sun Directional Light
            this.sunLight = new THREE.DirectionalLight(0xfff7e6, 1.1);
            this.sunLight.position.set(50, 75, 45);
            this.sunLight.castShadow = true;
            this.sunLight.shadow.mapSize.width = 2048;
            this.sunLight.shadow.mapSize.height = 2048;
            this.sunLight.shadow.camera.near = 10;
            this.sunLight.shadow.camera.far = 250;
            const d = 70;
            this.sunLight.shadow.camera.left = -d;
            this.sunLight.shadow.camera.right = d;
            this.sunLight.shadow.camera.top = d;
            this.sunLight.shadow.camera.bottom = -d;
            this.sunLight.shadow.bias = -0.0005;
            this.scene.add(this.sunLight);

            // Soft Hemisphere Light
            this.hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.35);
            this.scene.add(this.hemiLight);
        }

        buildEnvironment() {
            // Main Grass Ground
            const groundGeo = new THREE.PlaneGeometry(160, 160);
            const groundMat = new THREE.MeshStandardMaterial({
                color: 0x5a9e32,
                roughness: 0.85,
                metalness: 0.05
            });
            const ground = new THREE.Mesh(groundGeo, groundMat);
            ground.rotation.x = -Math.PI / 2;
            ground.receiveShadow = true;
            this.scene.add(ground);

            // Main Pathways / Plaza
            this.createPathway(0, 0.03, 0, 14, 110, 0xd2d7df); // Central avenue
            this.createPathway(-15, 0.04, -8, 50, 10, 0xd2d7df); // Academic crossway
            this.createPathway(15, 0.04, -16, 40, 9, 0xd2d7df); // ICT crossway
            this.createPathway(-18, 0.04, 25, 40, 8, 0xd2d7df); // Library path
            this.createPathway(18, 0.04, 22, 36, 8, 0xd2d7df); // Stage path

            // Boundary Wall & Gate
            this.createBoundaryWalls();

            // Sports Ground (Running track & pitch)
            this.createSportsField(5, 0.05, 20);

            // Trees and greenery
            this.populateTrees();

            // Street Lamps
            this.createLampPost(-8, -25);
            this.createLampPost(8, -25);
            this.createLampPost(-8, 5);
            this.createLampPost(8, 5);
            this.createLampPost(-8, 38);
            this.createLampPost(8, 38);
        }

        createPathway(x, y, z, w, d, color) {
            const geo = new THREE.PlaneGeometry(w, d);
            const mat = new THREE.MeshStandardMaterial({ color: color, roughness: 0.9 });
            const path = new THREE.Mesh(geo, mat);
            path.rotation.x = -Math.PI / 2;
            path.position.set(x, y, z);
            path.receiveShadow = true;
            this.scene.add(path);
        }

        createBoundaryWalls() {
            const wallMat = new THREE.MeshStandardMaterial({ color: 0x94a3b8, roughness: 0.8 });
            const postMat = new THREE.MeshStandardMaterial({ color: 0x64748b, roughness: 0.7 });

            // Back wall
            const backWall = new THREE.Mesh(new THREE.BoxGeometry(150, 2.5, 1), wallMat);
            backWall.position.set(0, 1.25, -55);
            backWall.castShadow = true;
            this.scene.add(backWall);

            // Left wall
            const leftWall = new THREE.Mesh(new THREE.BoxGeometry(1, 2.5, 110), wallMat);
            leftWall.position.set(-75, 1.25, 0);
            leftWall.castShadow = true;
            this.scene.add(leftWall);

            // Right wall
            const rightWall = new THREE.Mesh(new THREE.BoxGeometry(1, 2.5, 110), wallMat);
            rightWall.position.set(75, 1.25, 0);
            rightWall.castShadow = true;
            this.scene.add(rightWall);

            // Front wall with Main Entrance Arch
            const frontLeft = new THREE.Mesh(new THREE.BoxGeometry(65, 2.5, 1), wallMat);
            frontLeft.position.set(-42, 1.25, 55);
            frontLeft.castShadow = true;
            this.scene.add(frontLeft);

            const frontRight = new THREE.Mesh(new THREE.BoxGeometry(65, 2.5, 1), wallMat);
            frontRight.position.set(42, 1.25, 55);
            frontRight.castShadow = true;
            this.scene.add(frontRight);

            // Gate Pillars & Arch
            const pillarGeo = new THREE.BoxGeometry(2.4, 6.5, 2.4);
            const p1 = new THREE.Mesh(pillarGeo, postMat);
            p1.position.set(-9.5, 3.25, 55);
            p1.castShadow = true;
            this.scene.add(p1);

            const p2 = new THREE.Mesh(pillarGeo, postMat);
            p2.position.set(9.5, 3.25, 55);
            p2.castShadow = true;
            this.scene.add(p2);

            const archGeo = new THREE.BoxGeometry(21.4, 1.4, 1.8);
            const arch = new THREE.Mesh(archGeo, new THREE.MeshStandardMaterial({ color: 0x1e88e5, roughness: 0.5 }));
            arch.position.set(0, 6.8, 55);
            arch.castShadow = true;
            this.scene.add(arch);

            // Security booth
            const booth = new THREE.Mesh(new THREE.BoxGeometry(4, 3.5, 4), new THREE.MeshStandardMaterial({ color: 0xe2e8f0 }));
            booth.position.set(13, 1.75, 52);
            booth.castShadow = true;
            this.scene.add(booth);
        }

        createSportsField(cx, cy, cz) {
            // Running Track (Terracotta oval)
            const trackGeo = new THREE.PlaneGeometry(38, 26);
            const trackMat = new THREE.MeshStandardMaterial({ color: 0xbf360c, roughness: 0.9 });
            const track = new THREE.Mesh(trackGeo, trackMat);
            track.rotation.x = -Math.PI / 2;
            track.position.set(cx, cy, cz);
            track.receiveShadow = true;
            this.scene.add(track);

            // Inner Green Turf
            const fieldGeo = new THREE.PlaneGeometry(32, 20);
            const fieldMat = new THREE.MeshStandardMaterial({ color: 0x388e3c, roughness: 0.8 });
            const field = new THREE.Mesh(fieldGeo, fieldMat);
            field.rotation.x = -Math.PI / 2;
            field.position.set(cx, cy + 0.01, cz);
            field.receiveShadow = true;
            this.scene.add(field);

            // Soccer Goals
            this.createSoccerGoal(cx - 15, cy + 0.02, cz, Math.PI / 2);
            this.createSoccerGoal(cx + 15, cy + 0.02, cz, -Math.PI / 2);
        }

        createSoccerGoal(x, y, z, rot) {
            const goalGroup = new THREE.Group();
            const barMat = new THREE.MeshStandardMaterial({ color: 0xffffff });
            const postGeo = new THREE.CylinderGeometry(0.12, 0.12, 2.5);

            const p1 = new THREE.Mesh(postGeo, barMat);
            p1.position.set(0, 1.25, -2);
            goalGroup.add(p1);

            const p2 = new THREE.Mesh(postGeo, barMat);
            p2.position.set(0, 1.25, 2);
            goalGroup.add(p2);

            const crossGeo = new THREE.CylinderGeometry(0.12, 0.12, 4.1);
            const cross = new THREE.Mesh(crossGeo, barMat);
            cross.rotation.x = Math.PI / 2;
            cross.position.set(0, 2.5, 0);
            goalGroup.add(cross);

            goalGroup.position.set(x, y, z);
            goalGroup.rotation.y = rot;
            this.scene.add(goalGroup);
        }

        buildCampus() {
            // 1. Main Academic Building
            this.buildAcademicBuilding();

            // 2. Science & ICT Complex
            this.buildScienceICTBuilding();

            // 3. Central Library
            this.buildLibraryBuilding();

            // 4. Open-Air Auditorium Stage
            this.buildAuditoriumStage();

            // 5. Bangladesh National Flagpole
            this.buildFlagPole(-12, 0, 12);
        }

        buildAcademicBuilding() {
            const group = new THREE.Group();
            group.userData = { id: 'academic' };

            // Main Body (2 floors)
            const bodyGeo = new THREE.BoxGeometry(38, 10, 16);
            const bodyMat = new THREE.MeshStandardMaterial({ color: 0xf1f5f9, roughness: 0.7 });
            const body = new THREE.Mesh(bodyGeo, bodyMat);
            body.position.y = 5;
            body.castShadow = true;
            body.receiveShadow = true;
            group.add(body);

            // Roof (Blue sloping hip)
            const roofGeo = new THREE.BoxGeometry(40, 1.2, 18);
            const roofMat = new THREE.MeshStandardMaterial({ color: 0x1565c0, roughness: 0.5 });
            const roof = new THREE.Mesh(roofGeo, roofMat);
            roof.position.y = 10.6;
            roof.castShadow = true;
            group.add(roof);

            // Entrance Portico / Pillars
            const portico = new THREE.Mesh(new THREE.BoxGeometry(10, 8, 4), new THREE.MeshStandardMaterial({ color: 0xffffff }));
            portico.position.set(0, 4, 9);
            portico.castShadow = true;
            group.add(portico);

            // Building Signboard
            const sign = new THREE.Mesh(new THREE.BoxGeometry(14, 1.5, 0.3), new THREE.MeshStandardMaterial({ color: 0x0d47a1 }));
            sign.position.set(0, 9.5, 8.2);
            group.add(sign);

            // Windows Rows
            this.addWindowRows(group, 38, 16, 2, 8);

            group.position.set(-22, 0, -10);
            this.scene.add(group);
            this.interactiveObjects.push(group);
        }

        buildScienceICTBuilding() {
            const group = new THREE.Group();
            group.userData = { id: 'science-ict' };

            // Modern Main Block
            const body = new THREE.Mesh(new THREE.BoxGeometry(26, 9.5, 15), new THREE.MeshStandardMaterial({ color: 0xe2e8f0, roughness: 0.6 }));
            body.position.y = 4.75;
            body.castShadow = true;
            body.receiveShadow = true;
            group.add(body);

            // Modern parapet roof
            const roof = new THREE.Mesh(new THREE.BoxGeometry(27, 0.8, 16), new THREE.MeshStandardMaterial({ color: 0x334155, roughness: 0.4 }));
            roof.position.y = 9.9;
            group.add(roof);

            // Solar Panels on roof
            for (let i = -7; i <= 7; i += 5) {
                const panel = new THREE.Mesh(new THREE.BoxGeometry(3.5, 0.2, 5), new THREE.MeshStandardMaterial({ color: 0x0284c7, roughness: 0.2, metalness: 0.8 }));
                panel.rotation.x = -0.15;
                panel.position.set(i, 10.6, -1);
                group.add(panel);
            }

            // Windows
            this.addWindowRows(group, 26, 15, 2, 6);

            group.position.set(22, 0, -18);
            this.scene.add(group);
            this.interactiveObjects.push(group);
        }

        buildLibraryBuilding() {
            const group = new THREE.Group();
            group.userData = { id: 'library' };

            // Pavilion Style
            const body = new THREE.Mesh(new THREE.BoxGeometry(22, 7.5, 14), new THREE.MeshStandardMaterial({ color: 0xfef08a, roughness: 0.8 }));
            body.position.y = 3.75;
            body.castShadow = true;
            body.receiveShadow = true;
            group.add(body);

            // Classical roof
            const roof = new THREE.Mesh(new THREE.ConeGeometry(13, 4, 4), new THREE.MeshStandardMaterial({ color: 0x991b1b, roughness: 0.6 }));
            roof.rotation.y = Math.PI / 4;
            roof.position.y = 9.5;
            roof.castShadow = true;
            group.add(roof);

            // Entrance columns
            const colMat = new THREE.MeshStandardMaterial({ color: 0xffffff });
            for (let x = -7; x <= 7; x += 3.5) {
                const col = new THREE.Mesh(new THREE.CylinderGeometry(0.35, 0.35, 6), colMat);
                col.position.set(x, 3, 7.5);
                col.castShadow = true;
                group.add(col);
            }

            // Windows
            this.addWindowRows(group, 22, 14, 1, 4);

            group.position.set(-28, 0, 25);
            this.scene.add(group);
            this.interactiveObjects.push(group);
        }

        buildAuditoriumStage() {
            const group = new THREE.Group();
            group.userData = { id: 'auditorium' };

            // Elevated Platform
            const stage = new THREE.Mesh(new THREE.BoxGeometry(20, 1.2, 14), new THREE.MeshStandardMaterial({ color: 0x78350f, roughness: 0.8 }));
            stage.position.y = 0.6;
            stage.castShadow = true;
            stage.receiveShadow = true;
            group.add(stage);

            // Stage Backdrop Wall
            const back = new THREE.Mesh(new THREE.BoxGeometry(20, 7, 1), new THREE.MeshStandardMaterial({ color: 0x1e88e5, roughness: 0.5 }));
            back.position.set(0, 4.5, -6.5);
            back.castShadow = true;
            group.add(back);

            // Canopy Roof
            const canopy = new THREE.Mesh(new THREE.BoxGeometry(21, 0.6, 15), new THREE.MeshStandardMaterial({ color: 0xffb703, roughness: 0.6 }));
            canopy.position.set(0, 8.2, 0);
            canopy.castShadow = true;
            group.add(canopy);

            // Support pillars
            const p1 = new THREE.Mesh(new THREE.CylinderGeometry(0.3, 0.3, 7.5), new THREE.MeshStandardMaterial({ color: 0xffffff }));
            p1.position.set(-9.5, 4.5, 6.5);
            group.add(p1);

            const p2 = p1.clone();
            p2.position.set(9.5, 4.5, 6.5);
            group.add(p2);

            group.position.set(28, 0, 22);
            this.scene.add(group);
            this.interactiveObjects.push(group);
        }

        addWindowRows(group, width, depth, floors, countX) {
            const winMat = new THREE.MeshStandardMaterial({
                color: 0x93c5fd,
                roughness: 0.2,
                metalness: 0.5,
                emissive: 0x000000
            });

            const spacing = (width - 4) / countX;
            for (let f = 0; f < floors; f++) {
                const y = 3 + f * 4;
                for (let i = 0; i < countX; i++) {
                    const x = -(width / 2) + 2.5 + i * spacing;
                    // Front Window
                    const winFront = new THREE.Mesh(new THREE.PlaneGeometry(1.8, 2), winMat.clone());
                    winFront.position.set(x, y, depth / 2 + 0.05);
                    group.add(winFront);
                    this.windowMeshes.push(winFront);

                    // Back Window
                    const winBack = new THREE.Mesh(new THREE.PlaneGeometry(1.8, 2), winMat.clone());
                    winBack.rotation.y = Math.PI;
                    winBack.position.set(x, y, -(depth / 2 + 0.05));
                    group.add(winBack);
                    this.windowMeshes.push(winBack);
                }
            }
        }

        buildFlagPole(x, y, z) {
            const flagGroup = new THREE.Group();

            // Pole
            const poleGeo = new THREE.CylinderGeometry(0.12, 0.18, 14);
            const poleMat = new THREE.MeshStandardMaterial({ color: 0xd1d5db, metalness: 0.8, roughness: 0.2 });
            const pole = new THREE.Mesh(poleGeo, poleMat);
            pole.position.y = 7;
            pole.castShadow = true;
            flagGroup.add(pole);

            // Base
            const base = new THREE.Mesh(new THREE.CylinderGeometry(1.5, 2, 0.8, 8), new THREE.MeshStandardMaterial({ color: 0xffffff }));
            base.position.y = 0.4;
            flagGroup.add(base);

            // Flag Cloth (Bangladesh Flag: Green field with red circle)
            const canvas = document.createElement('canvas');
            canvas.width = 128;
            canvas.height = 76;
            const ctx = canvas.getContext('2d');
            ctx.fillStyle = '#006a4e'; // Bottle green
            ctx.fillRect(0, 0, 128, 76);
            ctx.fillStyle = '#f42a41'; // Red circle
            ctx.beginPath();
            ctx.arc(58, 38, 24, 0, Math.PI * 2);
            ctx.fill();

            const flagTex = new THREE.CanvasTexture(canvas);
            const flagGeo = new THREE.PlaneGeometry(3.6, 2.2, 10, 5);
            const flagMat = new THREE.MeshStandardMaterial({ map: flagTex, side: THREE.DoubleSide });
            this.flagMesh = new THREE.Mesh(flagGeo, flagMat);
            this.flagMesh.position.set(1.9, 12.5, 0);
            this.flagMesh.castShadow = true;
            flagGroup.add(this.flagMesh);

            flagGroup.position.set(x, y, z);
            this.scene.add(flagGroup);
        }

        populateTrees() {
            const treePositions = [
                [-48, -25], [-48, -10], [-48, 5], [-48, 20], [-48, 35],
                [48, -30], [48, -15], [48, 0], [48, 15], [48, 30],
                [-14, -35], [14, -35], [-20, -38], [20, -38],
                [-5, 45], [5, 45], [-18, 45], [18, 45]
            ];

            const trunkMat = new THREE.MeshStandardMaterial({ color: 0x5c4033, roughness: 0.9 });
            const leavesMat1 = new THREE.MeshStandardMaterial({ color: 0x2e7d32, roughness: 0.7 });
            const leavesMat2 = new THREE.MeshStandardMaterial({ color: 0x388e3c, roughness: 0.7 });

            treePositions.forEach(([x, z], idx) => {
                const tree = new THREE.Group();
                const trunkHeight = 3.5 + (idx % 3) * 0.5;
                const trunk = new THREE.Mesh(new THREE.CylinderGeometry(0.3, 0.45, trunkHeight), trunkMat);
                trunk.position.y = trunkHeight / 2;
                trunk.castShadow = true;
                tree.add(trunk);

                const foliageGeo = new THREE.DodecahedronGeometry(2.2 + (idx % 2) * 0.5);
                const foliage = new THREE.Mesh(foliageGeo, idx % 2 === 0 ? leavesMat1 : leavesMat2);
                foliage.position.y = trunkHeight + 1.8;
                foliage.castShadow = true;
                tree.add(foliage);

                tree.position.set(x, 0, z);
                this.scene.add(tree);
            });
        }

        createLampPost(x, z) {
            const post = new THREE.Group();
            const poleMat = new THREE.MeshStandardMaterial({ color: 0x334155, metalness: 0.6 });
            const pole = new THREE.Mesh(new THREE.CylinderGeometry(0.12, 0.16, 5), poleMat);
            pole.position.y = 2.5;
            post.add(pole);

            const head = new THREE.Mesh(new THREE.SphereGeometry(0.4, 8, 8), new THREE.MeshBasicMaterial({ color: 0xfff3b0 }));
            head.position.y = 5;
            post.add(head);

            // Night point light
            const light = new THREE.PointLight(0xffb703, 0, 18);
            light.position.y = 4.9;
            post.add(light);
            this.lampLights.push(light);

            post.position.set(x, 0, z);
            this.scene.add(post);
        }

        createHotspotMarkers() {
            this.hotspotMarkers = [];

            HOTSPOTS.forEach(hs => {
                // Marker Container
                const markerGroup = new THREE.Group();
                markerGroup.userData = { hotspot: hs };

                // Glowing sphere
                const sphereGeo = new THREE.SphereGeometry(0.9, 16, 16);
                const sphereMat = new THREE.MeshBasicMaterial({ color: 0x1e88e5 });
                const sphere = new THREE.Mesh(sphereGeo, sphereMat);
                markerGroup.add(sphere);

                // Pulsing ring
                const ringGeo = new THREE.RingGeometry(1.2, 1.6, 24);
                const ringMat = new THREE.MeshBasicMaterial({ color: 0x60a5fa, side: THREE.DoubleSide, transparent: true, opacity: 0.7 });
                const ring = new THREE.Mesh(ringGeo, ringMat);
                ring.rotation.x = Math.PI / 2;
                markerGroup.add(ring);
                markerGroup.userData.ring = ring;

                // Pin post down
                const pinPost = new THREE.Mesh(new THREE.CylinderGeometry(0.08, 0.08, 4), new THREE.MeshBasicMaterial({ color: 0xffffff, transparent: true, opacity: 0.8 }));
                pinPost.position.y = -2;
                markerGroup.add(pinPost);

                markerGroup.position.set(hs.position.x, hs.position.y, hs.position.z);
                this.scene.add(markerGroup);
                this.hotspotMarkers.push(markerGroup);
                this.interactiveObjects.push(sphere);
                sphere.userData = { hotspot: hs };
            });
        }

        bindEvents() {
            // Resize Handler
            window.addEventListener('resize', () => this.onWindowResize());

            // Click Raycaster for interactive hotspots
            this.renderer.domElement.addEventListener('pointerdown', (e) => {
                this.pointerDownTime = Date.now();
                this.pointerDownPos = { x: e.clientX, y: e.clientY };
            });

            this.renderer.domElement.addEventListener('pointerup', (e) => {
                // Ignore drags
                const dist = Math.hypot(e.clientX - this.pointerDownPos.x, e.clientY - this.pointerDownPos.y);
                if (dist > 5 || (Date.now() - this.pointerDownTime) > 300) return;

                const rect = this.renderer.domElement.getBoundingClientRect();
                this.mouse.x = ((e.clientX - rect.left) / rect.width) * 2 - 1;
                this.mouse.y = -((e.clientY - rect.top) / rect.height) * 2 + 1;

                this.raycaster.setFromCamera(this.mouse, this.camera);
                const intersects = this.raycaster.intersectObjects(this.interactiveObjects, true);

                if (intersects.length > 0) {
                    let obj = intersects[0].object;
                    let hotspot = obj.userData.hotspot;
                    while (!hotspot && obj.parent) {
                        obj = obj.parent;
                        hotspot = obj.userData ? (obj.userData.hotspot || HOTSPOTS.find(h => h.id === obj.userData.id)) : null;
                    }

                    if (hotspot) {
                        this.focusHotspot(hotspot);
                    }
                }
            });

            // Auto-Rotate Button
            const btnRotate = document.getElementById('btn-3d-rotate');
            if (btnRotate) {
                btnRotate.addEventListener('click', () => {
                    this.isAutoRotating = !this.isAutoRotating;
                    if (this.controls) this.controls.autoRotate = this.isAutoRotating;
                    btnRotate.classList.toggle('active', this.isAutoRotating);
                });
            }

            // Day / Night Toggle
            const btnDayNight = document.getElementById('btn-3d-daynight');
            if (btnDayNight) {
                btnDayNight.addEventListener('click', () => {
                    this.toggleDayNight();
                });
            }

            // Reset Camera View
            const btnReset = document.getElementById('btn-3d-reset');
            if (btnReset) {
                btnReset.addEventListener('click', () => {
                    this.resetView();
                });
            }

            // Fullscreen Button
            const btnFullscreen = document.getElementById('btn-3d-fullscreen');
            if (btnFullscreen) {
                btnFullscreen.addEventListener('click', () => {
                    this.toggleFullscreen();
                });
            }

            // HUD Camera Preset Pills
            document.querySelectorAll('.hud-preset-pill').forEach(pill => {
                pill.addEventListener('click', () => {
                    const preset = pill.getAttribute('data-preset');
                    this.goToPreset(preset);
                    document.querySelectorAll('.hud-preset-pill').forEach(p => p.classList.remove('active'));
                    pill.classList.add('active');
                });
            });

            // Hotspot Drawer Close Button
            const closeBtn = document.getElementById('hotspot-close-btn');
            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    const card = document.getElementById('hotspot-info-card');
                    if (card) card.classList.remove('active');
                });
            }

            // Facility cards "Locate in 3D" buttons
            document.querySelectorAll('.btn-locate-3d').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const targetId = btn.getAttribute('data-target-building');
                    const hotspot = HOTSPOTS.find(h => h.id === targetId);
                    if (hotspot) {
                        // Smooth scroll to 3D viewer
                        const viewerSec = document.getElementById('campus-3d-section');
                        if (viewerSec) {
                            const offset = viewerSec.getBoundingClientRect().top + window.scrollY - 80;
                            window.scrollTo({ top: offset, behavior: 'smooth' });
                        }
                        setTimeout(() => {
                            this.focusHotspot(hotspot);
                        }, 400);
                    }
                });
            });

            // Facility Catalog Filter Tabs
            document.querySelectorAll('.facility-filter-btn').forEach(tab => {
                tab.addEventListener('click', () => {
                    const filter = tab.getAttribute('data-filter');
                    document.querySelectorAll('.facility-filter-btn').forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    document.querySelectorAll('.facility-card-col').forEach(cardCol => {
                        const cat = cardCol.getAttribute('data-category');
                        if (filter === 'all' || cat === filter) {
                            cardCol.style.display = '';
                        } else {
                            cardCol.style.display = 'none';
                        }
                    });
                });
            });
        }

        focusHotspot(hs) {
            this.flyCamera(hs.camPos, hs.target);
            this.showHotspotCard(hs);

            // Update active pill
            document.querySelectorAll('.hud-preset-pill').forEach(p => {
                p.classList.toggle('active', p.getAttribute('data-preset') === hs.id);
            });
        }

        showHotspotCard(hs) {
            const card = document.getElementById('hotspot-info-card');
            if (!card) return;

            const img = document.getElementById('hotspot-img');
            const title = document.getElementById('hotspot-title');
            const badge = document.getElementById('hotspot-badge');
            const desc = document.getElementById('hotspot-desc');

            if (img) img.src = hs.image;
            if (title) title.textContent = hs.name;
            if (badge) badge.textContent = hs.badge;
            if (desc) desc.textContent = hs.desc;

            card.classList.add('active');
        }

        goToPreset(preset) {
            if (preset === 'overview') {
                this.resetView();
                return;
            }
            const hs = HOTSPOTS.find(h => h.id === preset);
            if (hs) {
                this.focusHotspot(hs);
            }
        }

        resetView() {
            this.flyCamera({ x: 0, y: 48, z: 85 }, { x: 0, y: 4, z: 0 });
            const card = document.getElementById('hotspot-info-card');
            if (card) card.classList.remove('active');
            document.querySelectorAll('.hud-preset-pill').forEach(p => {
                p.classList.toggle('active', p.getAttribute('data-preset') === 'overview');
            });
        }

        flyCamera(targetCamPos, targetControlsPos) {
            this.cameraAnimating = true;
            this.camTargetPos = new THREE.Vector3(targetCamPos.x, targetCamPos.y, targetCamPos.z);
            this.controlsTargetPos = new THREE.Vector3(targetControlsPos.x, targetControlsPos.y, targetControlsPos.z);
            if (this.controls) this.controls.autoRotate = false;
        }

        toggleDayNight() {
            this.isNight = !this.isNight;
            const container = document.getElementById('campus-3d-viewport');
            const btn = document.getElementById('btn-3d-daynight');

            if (this.isNight) {
                // Night / Dusk Theme
                this.scene.background = new THREE.Color(0x0a192f);
                this.scene.fog.color = new THREE.Color(0x0a192f);
                this.ambientLight.color.setHex(0x3b82f6);
                this.ambientLight.intensity = 0.25;
                this.sunLight.intensity = 0.15;
                this.sunLight.color.setHex(0x93c5fd);

                // Windows glow yellow
                this.windowMeshes.forEach(w => {
                    w.material.emissive.setHex(0xffd166);
                    w.material.emissiveIntensity = 0.9;
                });

                // Lamp lights on
                this.lampLights.forEach(l => l.intensity = 2.5);

                if (container) container.classList.add('night-mode');
                if (btn) btn.innerHTML = '<span class="icon">&#9728;</span> Day Mode';
            } else {
                // Daytime Theme
                this.scene.background = new THREE.Color(0xbfe3fc);
                this.scene.fog.color = new THREE.Color(0xbfe3fc);
                this.ambientLight.color.setHex(0xffffff);
                this.ambientLight.intensity = 0.6;
                this.sunLight.intensity = 1.1;
                this.sunLight.color.setHex(0xfff7e6);

                // Windows off
                this.windowMeshes.forEach(w => {
                    w.material.emissive.setHex(0x000000);
                    w.material.emissiveIntensity = 0;
                });

                // Lamp lights off
                this.lampLights.forEach(l => l.intensity = 0);

                if (container) container.classList.remove('night-mode');
                if (btn) btn.innerHTML = '<span class="icon">&#9790;</span> Night Mode';
            }
        }

        toggleFullscreen() {
            const target = document.getElementById('campus-3d-viewport');
            if (!document.fullscreenElement) {
                if (target && target.requestFullscreen) {
                    target.requestFullscreen();
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        }

        onWindowResize() {
            if (!this.container || !this.renderer || !this.camera) return;
            const width = this.container.clientWidth;
            const height = this.container.clientHeight;
            this.camera.aspect = width / height;
            this.camera.updateProjectionMatrix();
            this.renderer.setSize(width, height);
        }

        animate() {
            requestAnimationFrame(() => this.animate());

            // Smooth Camera Interpolation (Lerp)
            if (this.cameraAnimating && this.camTargetPos && this.controlsTargetPos) {
                this.camera.position.lerp(this.camTargetPos, 0.05);
                if (this.controls) {
                    this.controls.target.lerp(this.controlsTargetPos, 0.05);
                }

                if (this.camera.position.distanceTo(this.camTargetPos) < 0.2) {
                    this.cameraAnimating = false;
                }
            }

            // Flag Cloth wave effect
            if (this.flagMesh) {
                const time = Date.now() * 0.005;
                const pos = this.flagMesh.geometry.attributes.position;
                for (let i = 0; i < pos.count; i++) {
                    const u = pos.getX(i);
                    pos.setZ(i, Math.sin(u * 2 + time) * 0.25);
                }
                pos.needsUpdate = true;
            }

            // Hotspot Marker Pulsing
            if (this.hotspotMarkers) {
                const t = Date.now() * 0.003;
                this.hotspotMarkers.forEach(m => {
                    if (m.userData.ring) {
                        const scale = 1 + Math.sin(t) * 0.2;
                        m.userData.ring.scale.set(scale, scale, scale);
                    }
                    m.position.y += Math.sin(t * 1.5) * 0.005;
                });
            }

            if (this.controls) {
                this.controls.update();
            }

            this.renderer.render(this.scene, this.camera);
        }
    }

    // Auto-init on page load
    document.addEventListener('DOMContentLoaded', () => {
        window.khsCampus3D = new Campus3DApp();
    });
})();
