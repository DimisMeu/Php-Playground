<?php
  $days = 7;
  $mealsPerDay = 5;
  $mealCalories = 400;
  $totalCalories = $days * $mealsPerDay * $mealCalories;

  $breakfast = array("Oatmeal with fruit and nuts", "Egg and cheese sandwich", "Yogurt with granola", "Smoothie bowl", "Avocado toast");
  $lunch = array("Salad with grilled chicken", "Vegetable stir-fry", "Turkey and cheese wrap", "Quinoa bowl with vegetables and tofu", "Soup and sandwich");
  $snack = array("Fruit", "Veggies with hummus", "Protein bar", "Roasted almonds", "Greek yogurt");
  $dinner = array("Grilled salmon with vegetables", "Spaghetti with meat sauce", "Stir-fried tofu and vegetables", "Chicken fajitas", "Beef and broccoli stir-fry");
  $dessert = array("Fruit", "Dark chocolate", "Frozen yogurt", "Apple crisp", "Cottage cheese with fruit");

  echo "7-Day 2000 Calorie Meal Plan:\n";
  for ($i = 1; $i <= $days; $i++) {
    echo "\nDay $i:\n";
    echo "Breakfast: " . $breakfast[array_rand($breakfast)] . " (400 calories)\n";
    echo "Lunch: " . $lunch[array_rand($lunch)] . " (400 calories)\n";
    echo "Snack: " . $snack[array_rand($snack)] . " (100 calories)\n";
    echo "Dinner: " . $dinner[array_rand($dinner)] . " (400 calories)\n";
    echo "Dessert: " . $dessert[array_rand($dessert)] . " (100 calories)\n";
  }
  echo "\nTotal calories for the week: $totalCalories<br/>";
  echo "Enjoy your healthy meals!";
?>
