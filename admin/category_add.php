
<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE name=:name");
		$stmt->execute(['name'=>$name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Вече съществува категорията';
		}
		else{
			try{
				$stmt = $conn->prepare("INSERT INTO category (name) VALUES (:name)");
				$stmt->execute(['name'=>$name]);
				$_SESSION['success'] = 'Категорията е добавена успешно';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Първо попълни';
	}

	header('location: category.php');

?>