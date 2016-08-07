<?php

include('connection_config.php');

$conn = new mysqli($servername, $username, $password,"Video");

$sql="CREATE TABLE Algo(
	ID INT(7) 	NOT NULL PRIMARY KEY,
	Name VARCHAR(60) NOT NULL,
	Url VARCHAR(50) NOT NULL,
	Img VARCHAR(20) NOT NULL
	)";
$conn->query($sql);
$img='Images/algo.jpg';

$Names=array('1. Algorithmic Thinking, Peak Finding',
'2. Models of Computation, Document Distance ',
'3. Insertion Sort, Merge Sort ',
'4. Heaps and Heap Sort ',
'5. Binary Search Trees, BST Sort',
'6. AVL Trees, AVL Sort',
'7. Counting Sort, Radix Sort, Lower Bounds for Sorting',
'8. Hashing with Chaining',
'9. Table Doubling, Karp-Rabin',
'10. Open Addressing, Cryptographic Hashing',
'11. Integer Arithmetic, Karatsuba Multiplication',
'12. Square Roots, Newton\'s Method',
'13. Breadth-First Search (BFS) ',
'14. Depth-First Search (DFS), Topological Sort ',
'15. Single-Source Shortest Paths Problem ',
'16. Dijkstra ',
'17. Bellman-Ford ',
'18. Speeding up Dijkstra ',
'19. Dynamic Programming I: Fibonacci, Shortest Paths ',
'20. Dynamic Programming II: Text Justification, Blackjack ',
'21. DP III: Parenthesization, Edit Distance, Knapsack ',
'22. DP IV: Guitar Fingering, Tetris, Super Mario Bros. ',
'23. Computational Complexity ',
'24. Topics in Algorithms Research ',
'R1. Asymptotic Complexity, Peak Finding ',
'R2. Python Cost Model, Document Distance ',
'R3. Document Distance, Insertion and Merge Sort ',
'R5. Recursion Trees, Binary Search Trees ',
'R6. AVL Trees ',
'R7. Comparison Sort, Counting and Radix Sort ',
'R8. Simulation Algorithms ',
'R9. Rolling Hashes, Amortized Analysis ',
'Recitation 9b: DNA Sequence Matching ',
'R10. Quiz 1 Review ',
'R11. Principles of Algorithm Design ',
'R12. Karatsuba Multiplication, Newton\'s Method ',
'R13. Breadth-First Search (BFS) ',
'R14. Depth-First Search (DFS) ',
'R15. Shortest Paths ',
'R16. Rubik\'s Cube, StarCraft Zero ',
'R18. Quiz 2 Review ',
'R19. Dynamic Programming: Crazy Eights, Shortest Path ',
'R20. Dynamic Programming: Blackjack ',
'R22. Dynamic Programming: Dance Dance Revolution ',
'R21. Dynamic Programming: Knapsack Problem ',
'R23. Computational Complexity ',
'R24. Final Exam Review ');

$Links=array('https://www.youtube.com/embed/HtSuA80QTyo',
'https://www.youtube.com/embed/Zc54gFhdpLA',
'https://www.youtube.com/embed/Kg4bqzAqRBM',
'https://www.youtube.com/embed/B7hVxCmfPtM',
'https://www.youtube.com/embed/9Jry5-82I68',
'https://www.youtube.com/embed/FNeL18KsWPc',
'https://www.youtube.com/embed/Nz1KZXbghj8',
'https://www.youtube.com/embed/0M_kIqhwbFo',
'https://www.youtube.com/embed/BRO7mVIFt08',
'https://www.youtube.com/embed/rvdJDijO2Ro',
'https://www.youtube.com/embed/eCaXlAaN2uE',
'https://www.youtube.com/embed/2YeJ-5UAke8',
'https://www.youtube.com/embed/s-CYnVz-uh4',
'https://www.youtube.com/embed/AfSk24UTFS8',
'https://www.youtube.com/embed/Aa2sqUhIn-E',
'https://www.youtube.com/embed/2E7MmKv0Y24',
'https://www.youtube.com/embed/ozsuci5pIso',
'https://www.youtube.com/embed/CHvQ3q_gJ7E',
'https://www.youtube.com/embed/OQ5jsbhAv_M',
'https://www.youtube.com/embed/ENyox7kNKeY',
'https://www.youtube.com/embed/ocZMDMZwhCY',
'https://www.youtube.com/embed/tp4_UXaVyx8',
'https://www.youtube.com/embed/moPtwq_cVH8',
'https://www.youtube.com/embed/dU40AvBURDQ',
'https://www.youtube.com/embed/P7frcB_-g4w',
'https://www.youtube.com/embed/QFcyt8fgQMU',
'https://www.youtube.com/embed/4iXLnF3hExw',
'https://www.youtube.com/embed/r5pXu1PAUkI',
'https://www.youtube.com/embed/IWzYoXKaRIc',
'https://www.youtube.com/embed/9bkvws_vqLU',
'https://www.youtube.com/embed/eGSXsaJ-BlY',
'https://www.youtube.com/embed/w6nuXg0BISo',
'https://www.youtube.com/embed/-DwGrJ8JxDc',
'https://www.youtube.com/embed/-FElVPKykgw',
'https://www.youtube.com/embed/a_otxyu0mSQ',
'https://www.youtube.com/embed/JRgIXyEPnbA',
'https://www.youtube.com/embed/5JxShDZ_ylo',
'https://www.youtube.com/embed/C5SPsY72_CM',
'https://www.youtube.com/embed/mQSp6VmfakA',
'https://www.youtube.com/embed/oRpERQA4Vik',
'https://www.youtube.com/embed/sPuazUPiV1k',
'https://www.youtube.com/embed/IFrvgSvZA0I',
'https://www.youtube.com/embed/jZbkToeNK2g',
'https://www.youtube.com/embed/PptQgy89cN8',
'https://www.youtube.com/embed/wFP5VHGHFdk',
'https://www.youtube.com/embed/t5Wxk96QjUk',
'https://www.youtube.com/embed/hkAONP0aC9w');

for($i=0;$i<47;$i++)
{
$conn = new mysqli($servername, $username, $password,"Video");
$sql="INSERT INTO Algo (ID,Name,Url,Img)
VALUES ($i+76,'$Names[$i]','$Links[$i]','$img')";
$conn->query($sql);
}

?>
