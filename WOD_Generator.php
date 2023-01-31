<?php
  $movements = array("Burpees", "Squats", "Deadlifts", "Lunges", "Push-ups", "Sit-ups", "Box Jumps", "Pull-ups", "Handstand Push-ups", "Double Unders", "Snatch", "Clean", "Clean and Jerk", "Front Squat", "Overhead Squat", "Overhead Press", "Bench Press", "Push Press", "Back Squat", "Squat Jerk", "Split Jerk", "Barbell Row", "Thruster‘", "Ring Muscle Up", "Bar Muscle Up", "Ring Handstand Push Up", "Handstand Walk", "Wall Balls", "Box Jumps", "Rope Climbing", "Kettlebell Swings");
  $rounds = rand(3, 5);
  $reps = rand(10, 20);

  echo "Today's WOD:<br/>";
  echo "Complete $rounds rounds of:<br/>";
  for ($i = 1; $i <= $rounds; $i++) {
    shuffle($movements);
    echo "  - $reps " . $movements[0] . "<br/>";
  }
  echo "Have a great workout!";
?>
