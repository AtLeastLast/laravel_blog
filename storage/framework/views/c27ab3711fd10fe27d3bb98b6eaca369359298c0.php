
























    <!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
<div class="dropdown mx-3">
    <button class="dropbtn">More</button>
    <div class="dropdown-content">
        <a href="/userlist">Userlist</a>
        <a href="/create-post">Create a Post</a>
    </div>
</div>

</body>
</html>
<?php /**PATH /home/mattias/Projects/laravel_demo_app/resources/views/components/dropdown.blade.php ENDPATH**/ ?>