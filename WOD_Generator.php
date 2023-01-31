<?php
  $movements = array("Burpees", "Squats", "Deadlifts", "Lunges", "Push-ups", "Sit-ups", "Pull-ups", "Handstand Push-ups", "Double Unders", "Snatch", "Clean and Jerk", "Front Squat", "Overhead Squat", "Overhead Press", "Bench Press", "Push Press", "Back Squat", "Squat Jerk", "Split Jerk", "Barbell Row", "Thruster‘", "Ring Muscle Up", "Bar Muscle Up", "Ring Handstand Push Up", "Handstand Walk", "Wall Balls", "Box Jumps", "Rope Climbing", "Kettlebell Swings", "Barbell Rollout", "Sumo Deadlift", "Power Clean and Split Jerk", "Barbell Snatch", "Clean and Press");
  $types = array("EMOM", "AMRAP", "RFT", "Chipper");
  $rounds = rand(4, 6);

  shuffle($types);
  echo "Today's WOD:<br/>";
  echo $types[0]. " | Complete ".$rounds." rounds of:<br/>";
  for ($i = 1; $i <= $rounds; $i++) {
    shuffle($movements);
    $reps = rand(8, 18);
	echo $i.") ".$reps." (reps &plus; 2) " .$movements[0]. "<br/>";
  }
  echo "Have a great workout!";

//EMOM every minute on the minute
//AMRAP As many rounds as possible
//RFT Rounds for time
//Chipper A one-round series of exercises, usually with high reps, to be completed in the fastest time possible
//Ladder One or more movements, increasing or decreasing the workload over time

?>
