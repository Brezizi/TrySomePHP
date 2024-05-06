    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 1</title>
    </head>
    <body>
    <?php 
     /*Modul 2 Latihan 1*/
     $employee = [
         'name' => 'John',
         'email' => 'john@example.com',
         'phone' => '1234567890',
         'hobbies' => ['Football', 'Tennis'],
         'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
       ];
       
    // access hobbies
       echo $employee['hobbies'][0];
       echo '<br>';
    // Football
       
       echo $employee['hobbies'][1];
       echo '<br>';
    // Tennis
       
    // access profiles
       echo $employee['profiles']['facebook'];
       echo '<br>';
    // johnfb
       
       echo $employee['profiles']['twitter'];
       echo '<br>';
    // johntw

    /*Modul 2 Latihan 3*/
    ?>
    </body>
    </html>