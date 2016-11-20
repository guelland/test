<!DOCTYPE html><html><head><meta charset="UTF-8"></head><body>
<?php


trait Hello {
    public function sayHello() {
        echo 'Hallo ';
    }
}

trait World {
    public function sayWorld() {
        echo ' Welt';
    }
}

class MyHelloWorld {
    use Hello, World;
	
	public function sayWorld() {
        echo ' Erde';
    }
	
    public function sayExclamationMark() {
        echo '!<br>';
    }
}

class MyNewWorld extends MyHelloWorld {
	use Hello,World;
	public function sayWorld(){
		echo 'Erdkreis';
	}
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
$p = new MyNewWorld();
$p->sayHello();
$p->sayWorld();
$p->sayExclamationMark();

?>	
</body>
</html>