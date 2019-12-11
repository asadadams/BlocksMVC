Views
==============
View is just a web page you would want to display. This can be a header or a footer etc. Views can be loaded in a controller. 

Using the example controller you created in the controller page, let’s add a view to it.

Creating a View
----------------
Let's create a simple view and load it with the controller we have already created. Using a text editor, create a file called **dashboard.php** and save it to **app/Views** directory


.. code-block:: php
    :linenos:
	
	<html>
		<head>
			<title> My Dashbord</title>
		</head>
		<body>
			<h1Dashboard</h1>
			<p>Welcome to your dashboard</p>
		</body>
	</html>

Loading a View
---------------
To load the view in our **index** method in the controoler

.. code-block:: php
	
	$this->load->view('dashboard');
	
.. note:: You don't need the .php extension

