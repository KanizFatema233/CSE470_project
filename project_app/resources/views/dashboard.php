
  
<?php
echo '<h2> welcome to my dashboard </h2>';

for ($x = 0; $x < 3; $x++) {
    echo '<br>';
  }
echo Form::open(array('url' => 'form_database')) ;
    echo Form::label('username');
    echo '<br>';
    echo Form::text('username');
    echo '<br>';

    echo Form::label('password');
    echo '<br>';
    echo Form::password('password');
    echo '<br>';

    echo Form::submit('submit');
echo Form::close();


?>


