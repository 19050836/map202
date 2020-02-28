<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <title>MAP 202</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
        <style>
            body>.container {
                padding: 60px 15px 0;
            }
			
			a.custom
			{
				margin: 10px;
    			padding: 10px;
				color:green;
				font-size:20px;
			} 
			a.custom:hover {
				
				font-size:220%;
			}
			.container
			{
				height:100px !important;
			}
			
			#course_insert {
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#course_insert td, #course_insert th {
			  border: 1px solid #ddd;
			  padding: 8px;
			}

			#course_insert tr:nth-child(even){background-color: #f2f2f2;}

			#course_insert tr:hover {background-color: #ddd;}

			#course_insert th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: left;
			  background-color: #4CAF50;
			  color: white;
			}

        </style>
    </head>

    <body>
		<header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
                <a class="navbar-brand" href="#">MAP 202</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                            </a>
                        </li>
						 <li class="nav-item">
                            <a class="nav-link" href="/courses/insert">Insert
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="/courses">Courses
                            </a>
                        </li>

                    </ul>
					<ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link" href="/logout/inder">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
