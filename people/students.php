<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students | Kapotaksha High School</title>
    <link href="../libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/people-shared.css">
    <link rel="stylesheet" href="css/students.css">
    <link rel="icon" href="../photos/KHS.png" type="image/png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php
$root = '../';
include __DIR__ . '/../components/navbar.php';
?>

    <!-- Page Banner -->
    <div class="page-banner">
        <img src="../photos/Cover.gif" alt="Students" class="page-banner-img">
        <div class="page-banner-overlay">
            <h1 class="page-banner-title">STUDENTS</h1>
        </div>
    </div>

    <!-- Students Section -->
    <section class="students-section">
        <div class="container">

            <!-- Filter Bar -->
            <div class="students-filter">
                <label for="classSelect">Select Class:</label>
                <select id="classSelect" onchange="showClass(this.value)">
                    <option value="">-- Choose a Class --</option>
                    <option value="6">Class 6</option>
                    <option value="7">Class 7</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                </select>
            </div>

            <!-- Placeholder (shown when no class is selected) -->
            <div class="students-placeholder" id="placeholder">
                <div class="placeholder-icon">🎓</div>
                <p>Select a class from the dropdown to view the student list.</p>
            </div>

            <!-- ═══════════════════════════════════════════════════
                 CLASS 6
                 ═══════════════════════════════════════════════════ -->
            <div class="class-panel" id="class-6">
                <h2 class="class-title">Class 6</h2>

                <!-- Section A -->
                <p class="section-label">Section – A</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>KHS-6A-001</td><td>01</td><td>Md. Arif Hossain</td></tr>
                            <tr><td>2</td><td>KHS-6A-002</td><td>02</td><td>Fatema Akter</td></tr>
                            <tr><td>3</td><td>KHS-6A-003</td><td>03</td><td>Raju Mondal</td></tr>
                            <tr><td>4</td><td>KHS-6A-004</td><td>04</td><td>Priya Das</td></tr>
                            <tr><td>5</td><td>KHS-6A-005</td><td>05</td><td>Sohel Rana</td></tr>
                            <tr><td>6</td><td>KHS-6A-006</td><td>06</td><td>Mitu Begum</td></tr>
                            <tr><td>7</td><td>KHS-6A-007</td><td>07</td><td>Sajib Sarkar</td></tr>
                            <tr><td>8</td><td>KHS-6A-008</td><td>08</td><td>Puja Mondal</td></tr>
                            <tr><td>9</td><td>KHS-6A-009</td><td>09</td><td>Karim Sheikh</td></tr>
                            <tr><td>10</td><td>KHS-6A-010</td><td>10</td><td>Lata Biswas</td></tr>
                            <tr><td>11</td><td>KHS-6A-011</td><td>11</td><td>Ratan Gain</td></tr>
                            <tr><td>12</td><td>KHS-6A-012</td><td>12</td><td>Shova Rani</td></tr>
                            <tr><td>13</td><td>KHS-6A-013</td><td>13</td><td>Minhaj Uddin</td></tr>
                            <tr><td>14</td><td>KHS-6A-014</td><td>14</td><td>Rina Khatun</td></tr>
                            <tr><td>15</td><td>KHS-6A-015</td><td>15</td><td>Subrata Mondal</td></tr>
                            <tr><td>16</td><td>KHS-6A-016</td><td>16</td><td>Nargis Parvin</td></tr>
                            <tr><td>17</td><td>KHS-6A-017</td><td>17</td><td>Biplab Roy</td></tr>
                            <tr><td>18</td><td>KHS-6A-018</td><td>18</td><td>Swapna Dey</td></tr>
                            <tr><td>19</td><td>KHS-6A-019</td><td>19</td><td>Farhan Ahmed</td></tr>
                            <tr><td>20</td><td>KHS-6A-020</td><td>20</td><td>Moumita Haldar</td></tr>
                            <tr><td>21</td><td>KHS-6A-021</td><td>21</td><td>Sujon Bain</td></tr>
                            <tr><td>22</td><td>KHS-6A-022</td><td>22</td><td>Tania Sultana</td></tr>
                            <tr><td>23</td><td>KHS-6A-023</td><td>23</td><td>Nirmal Halder</td></tr>
                            <tr><td>24</td><td>KHS-6A-024</td><td>24</td><td>Sumi Akter</td></tr>
                            <tr><td>25</td><td>KHS-6A-025</td><td>25</td><td>Akash Mondal</td></tr>
                            <tr><td>26</td><td>KHS-6A-026</td><td>26</td><td>Rupa Sarkar</td></tr>
                            <tr><td>27</td><td>KHS-6A-027</td><td>27</td><td>Jahangir Alam</td></tr>
                            <tr><td>28</td><td>KHS-6A-028</td><td>28</td><td>Champa Rani</td></tr>
                            <tr><td>29</td><td>KHS-6A-029</td><td>29</td><td>Dipu Mondal</td></tr>
                            <tr><td>30</td><td>KHS-6A-030</td><td>30</td><td>Nasrin Begum</td></tr>
                            <tr><td>31</td><td>KHS-6A-031</td><td>31</td><td>Suman Roy</td></tr>
                            <tr><td>32</td><td>KHS-6A-032</td><td>32</td><td>Keya Mondal</td></tr>
                            <tr><td>33</td><td>KHS-6A-033</td><td>33</td><td>Masum Billah</td></tr>
                            <tr><td>34</td><td>KHS-6A-034</td><td>34</td><td>Anjali Das</td></tr>
                            <tr><td>35</td><td>KHS-6A-035</td><td>35</td><td>Tanvir Hasan</td></tr>
                            <tr><td>36</td><td>KHS-6A-036</td><td>36</td><td>Shathi Mondal</td></tr>
                            <tr><td>37</td><td>KHS-6A-037</td><td>37</td><td>Rubel Hossain</td></tr>
                            <tr><td>38</td><td>KHS-6A-038</td><td>38</td><td>Mili Sarkar</td></tr>
                            <tr><td>39</td><td>KHS-6A-039</td><td>39</td><td>Nirob Gain</td></tr>
                            <tr><td>40</td><td>KHS-6A-040</td><td>40</td><td>Prity Biswas</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Section B -->
                <p class="section-label">Section – B</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>KHS-6B-001</td><td>01</td><td>Imran Hossain</td></tr>
                            <tr><td>2</td><td>KHS-6B-002</td><td>02</td><td>Laboni Akter</td></tr>
                            <tr><td>3</td><td>KHS-6B-003</td><td>03</td><td>Palash Mondal</td></tr>
                            <tr><td>4</td><td>KHS-6B-004</td><td>04</td><td>Suma Das</td></tr>
                            <tr><td>5</td><td>KHS-6B-005</td><td>05</td><td>Rakib Hasan</td></tr>
                            <tr><td>6</td><td>KHS-6B-006</td><td>06</td><td>Rekha Begum</td></tr>
                            <tr><td>7</td><td>KHS-6B-007</td><td>07</td><td>Tapan Sarkar</td></tr>
                            <tr><td>8</td><td>KHS-6B-008</td><td>08</td><td>Sonali Mondal</td></tr>
                            <tr><td>9</td><td>KHS-6B-009</td><td>09</td><td>Alamin Sheikh</td></tr>
                            <tr><td>10</td><td>KHS-6B-010</td><td>10</td><td>Kalpana Biswas</td></tr>
                            <tr><td>11</td><td>KHS-6B-011</td><td>11</td><td>Prodip Gain</td></tr>
                            <tr><td>12</td><td>KHS-6B-012</td><td>12</td><td>Minati Rani</td></tr>
                            <tr><td>13</td><td>KHS-6B-013</td><td>13</td><td>Rasel Uddin</td></tr>
                            <tr><td>14</td><td>KHS-6B-014</td><td>14</td><td>Shapna Khatun</td></tr>
                            <tr><td>15</td><td>KHS-6B-015</td><td>15</td><td>Pranab Mondal</td></tr>
                            <tr><td>16</td><td>KHS-6B-016</td><td>16</td><td>Rehana Parvin</td></tr>
                            <tr><td>17</td><td>KHS-6B-017</td><td>17</td><td>Uttam Roy</td></tr>
                            <tr><td>18</td><td>KHS-6B-018</td><td>18</td><td>Mitali Dey</td></tr>
                            <tr><td>19</td><td>KHS-6B-019</td><td>19</td><td>Sabbir Ahmed</td></tr>
                            <tr><td>20</td><td>KHS-6B-020</td><td>20</td><td>Ratna Haldar</td></tr>
                            <tr><td>21</td><td>KHS-6B-021</td><td>21</td><td>Tapas Bain</td></tr>
                            <tr><td>22</td><td>KHS-6B-022</td><td>22</td><td>Sheuli Sultana</td></tr>
                            <tr><td>23</td><td>KHS-6B-023</td><td>23</td><td>Bimal Halder</td></tr>
                            <tr><td>24</td><td>KHS-6B-024</td><td>24</td><td>Shilpi Akter</td></tr>
                            <tr><td>25</td><td>KHS-6B-025</td><td>25</td><td>Liton Mondal</td></tr>
                            <tr><td>26</td><td>KHS-6B-026</td><td>26</td><td>Dipa Sarkar</td></tr>
                            <tr><td>27</td><td>KHS-6B-027</td><td>27</td><td>Nurul Alam</td></tr>
                            <tr><td>28</td><td>KHS-6B-028</td><td>28</td><td>Dolly Rani</td></tr>
                            <tr><td>29</td><td>KHS-6B-029</td><td>29</td><td>Ripon Mondal</td></tr>
                            <tr><td>30</td><td>KHS-6B-030</td><td>30</td><td>Parvin Begum</td></tr>
                            <tr><td>31</td><td>KHS-6B-031</td><td>31</td><td>Avijit Roy</td></tr>
                            <tr><td>32</td><td>KHS-6B-032</td><td>32</td><td>Nitu Mondal</td></tr>
                            <tr><td>33</td><td>KHS-6B-033</td><td>33</td><td>Jakir Hossain</td></tr>
                            <tr><td>34</td><td>KHS-6B-034</td><td>34</td><td>Brishti Das</td></tr>
                            <tr><td>35</td><td>KHS-6B-035</td><td>35</td><td>Shaon Hasan</td></tr>
                            <tr><td>36</td><td>KHS-6B-036</td><td>36</td><td>Moni Mondal</td></tr>
                            <tr><td>37</td><td>KHS-6B-037</td><td>37</td><td>Habib Hossain</td></tr>
                            <tr><td>38</td><td>KHS-6B-038</td><td>38</td><td>Purnima Sarkar</td></tr>
                            <tr><td>39</td><td>KHS-6B-039</td><td>39</td><td>Sumon Gain</td></tr>
                            <tr><td>40</td><td>KHS-6B-040</td><td>40</td><td>Tuli Biswas</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════
                 CLASS 7
                 ═══════════════════════════════════════════════════ -->
            <div class="class-panel" id="class-7">
                <h2 class="class-title">Class 7</h2>

                <!-- Section A -->
                <p class="section-label">Section – A</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>KHS-7A-001</td><td>01</td><td>Md. Mahfuz Alam</td></tr>
                            <tr><td>2</td><td>KHS-7A-002</td><td>02</td><td>Afroza Khatun</td></tr>
                            <tr><td>3</td><td>KHS-7A-003</td><td>03</td><td>Sukanto Mondal</td></tr>
                            <tr><td>4</td><td>KHS-7A-004</td><td>04</td><td>Rimi Das</td></tr>
                            <tr><td>5</td><td>KHS-7A-005</td><td>05</td><td>Shahadat Hossain</td></tr>
                            <tr><td>6</td><td>KHS-7A-006</td><td>06</td><td>Liza Begum</td></tr>
                            <tr><td>7</td><td>KHS-7A-007</td><td>07</td><td>Debashis Sarkar</td></tr>
                            <tr><td>8</td><td>KHS-7A-008</td><td>08</td><td>Kakoli Mondal</td></tr>
                            <tr><td>9</td><td>KHS-7A-009</td><td>09</td><td>Belal Sheikh</td></tr>
                            <tr><td>10</td><td>KHS-7A-010</td><td>10</td><td>Jhuma Biswas</td></tr>
                            <tr><td>11</td><td>KHS-7A-011</td><td>11</td><td>Khokon Gain</td></tr>
                            <tr><td>12</td><td>KHS-7A-012</td><td>12</td><td>Archana Rani</td></tr>
                            <tr><td>13</td><td>KHS-7A-013</td><td>13</td><td>Zahirul Islam</td></tr>
                            <tr><td>14</td><td>KHS-7A-014</td><td>14</td><td>Amena Khatun</td></tr>
                            <tr><td>15</td><td>KHS-7A-015</td><td>15</td><td>Niloy Mondal</td></tr>
                            <tr><td>16</td><td>KHS-7A-016</td><td>16</td><td>Poly Parvin</td></tr>
                            <tr><td>17</td><td>KHS-7A-017</td><td>17</td><td>Santosh Roy</td></tr>
                            <tr><td>18</td><td>KHS-7A-018</td><td>18</td><td>Kabita Dey</td></tr>
                            <tr><td>19</td><td>KHS-7A-019</td><td>19</td><td>Saiful Islam</td></tr>
                            <tr><td>20</td><td>KHS-7A-020</td><td>20</td><td>Mousumi Haldar</td></tr>
                            <tr><td>21</td><td>KHS-7A-021</td><td>21</td><td>Arun Bain</td></tr>
                            <tr><td>22</td><td>KHS-7A-022</td><td>22</td><td>Roksana Sultana</td></tr>
                            <tr><td>23</td><td>KHS-7A-023</td><td>23</td><td>Gopal Halder</td></tr>
                            <tr><td>24</td><td>KHS-7A-024</td><td>24</td><td>Morsheda Akter</td></tr>
                            <tr><td>25</td><td>KHS-7A-025</td><td>25</td><td>Asif Mondal</td></tr>
                            <tr><td>26</td><td>KHS-7A-026</td><td>26</td><td>Khadija Sarkar</td></tr>
                            <tr><td>27</td><td>KHS-7A-027</td><td>27</td><td>Aminul Alam</td></tr>
                            <tr><td>28</td><td>KHS-7A-028</td><td>28</td><td>Gita Rani</td></tr>
                            <tr><td>29</td><td>KHS-7A-029</td><td>29</td><td>Tuhin Mondal</td></tr>
                            <tr><td>30</td><td>KHS-7A-030</td><td>30</td><td>Halima Begum</td></tr>
                            <tr><td>31</td><td>KHS-7A-031</td><td>31</td><td>Rajib Roy</td></tr>
                            <tr><td>32</td><td>KHS-7A-032</td><td>32</td><td>Jyoti Mondal</td></tr>
                            <tr><td>33</td><td>KHS-7A-033</td><td>33</td><td>Faisal Hossain</td></tr>
                            <tr><td>34</td><td>KHS-7A-034</td><td>34</td><td>Runa Das</td></tr>
                            <tr><td>35</td><td>KHS-7A-035</td><td>35</td><td>Mizan Hasan</td></tr>
                            <tr><td>36</td><td>KHS-7A-036</td><td>36</td><td>Sanjida Mondal</td></tr>
                            <tr><td>37</td><td>KHS-7A-037</td><td>37</td><td>Monir Hossain</td></tr>
                            <tr><td>38</td><td>KHS-7A-038</td><td>38</td><td>Asha Sarkar</td></tr>
                            <tr><td>39</td><td>KHS-7A-039</td><td>39</td><td>Palash Gain</td></tr>
                            <tr><td>40</td><td>KHS-7A-040</td><td>40</td><td>Nasima Biswas</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Section B -->
                <p class="section-label">Section – B</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 7 Section B students here -->
                            <tr><td>1</td><td>KHS-7B-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-7B-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════
                 CLASS 8
                 ═══════════════════════════════════════════════════ -->
            <div class="class-panel" id="class-8">
                <h2 class="class-title">Class 8</h2>

                <!-- Section A -->
                <p class="section-label">Section – A</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 8 Section A students here -->
                            <tr><td>1</td><td>KHS-8A-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-8A-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Section B -->
                <p class="section-label">Section – B</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 8 Section B students here -->
                            <tr><td>1</td><td>KHS-8B-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-8B-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════
                 CLASS 9
                 ═══════════════════════════════════════════════════ -->
            <div class="class-panel" id="class-9">
                <h2 class="class-title">Class 9</h2>

                <!-- Section A -->
                <p class="section-label">Section – A</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 9 Section A students here -->
                            <tr><td>1</td><td>KHS-9A-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-9A-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Section B (Science) -->
                <p class="section-label">Section – B (Science)</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 9 Section B students here -->
                            <tr><td>1</td><td>KHS-9B-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-9B-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════
                 CLASS 10
                 ═══════════════════════════════════════════════════ -->
            <div class="class-panel" id="class-10">
                <h2 class="class-title">Class 10</h2>

                <!-- Section A -->
                <p class="section-label">Section – A</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 10 Section A students here -->
                            <tr><td>1</td><td>KHS-10A-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-10A-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>

                <!-- Section B (Science) -->
                <p class="section-label">Section – B (Science)</p>
                <div class="student-table-wrapper">
                    <table class="student-table">
                        <thead>
                            <tr>
                                <th class="col-sl">SL</th>
                                <th class="col-id">Unique ID</th>
                                <th class="col-roll">Roll</th>
                                <th class="col-name">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Add Class 10 Section B students here -->
                            <tr><td>1</td><td>KHS-10B-001</td><td>01</td><td>Student Name</td></tr>
                            <tr><td>2</td><td>KHS-10B-002</td><td>02</td><td>Student Name</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- /.container -->
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" aria-label="Back to top">&#8679;</a>

    <!-- Footer -->
    <?php include __DIR__ . '/../components/footer.php'; ?>

    <script src="js/students.js"></script>

    <script src="../libs/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
