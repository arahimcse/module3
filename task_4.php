<?php 
/**
 * Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
 * 
 */
function calculateAverageGrades($students) {
    foreach ($students as $student) {
        $totalMarks = array_sum($student);
        $numberOfSubject = count($student);
        // $average = ceil($totalMarks/$numberOfSubject);
        $average = round($totalMarks/$numberOfSubject, 2);
        echo "Student Subject & Marks: ";
        foreach ($student as $subject => $grade) {
            echo "$subject: $grade, ";
        }
        echo "Average Grade: $average\n";
    }
}
$studentGrades =    [
    ['Math' => 90, 'English' => 85, 'Science' => 92],
    ['Math' => 78, 'English' => 88, 'Science' => 80],
    ['Math' => 95, 'English' => 89, 'Science' => 88]
];
calculateAverageGrades($studentGrades);