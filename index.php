
<?php
  $gender = 'Homme';
  $age = 27;
  function genderAndAge(string $gender, int $age)
  {
    if ($gender == 'Homme' && $age >= 18) {
      echo "Vous etes un $gender majeur, vous avez $age ans.";
    }
    elseif ($gender == 'Homme' && $age < 18) {
      echo "Vous etes un $gender mineur, vous avez $age ans.";
    }
    elseif ($gender == 'Femme' && $age >= 18) {
      echo "Vous etes une $gender majeure, vous avez $age ans.";
    }
    else {
      echo "Vous etes une $gender mineure, vous avez $age ans.";
    };
  };
 genderAndAge($gender, $age); ?>
