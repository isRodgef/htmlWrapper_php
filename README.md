# htmlWrapper_php
html wrapper in php 

Basically I was tired  of having php code that look liked this
  ~~~
    <body>
    <?php
      $echo "<br>"
    ?>
    </body>
    
   ~~~

The reason I disliked this was because I found it differentiate the php from html so I created a htmlWrapper Class that would hold the php tags and only output the html at the end of the calling file (i.e just before it gets send to the client)

