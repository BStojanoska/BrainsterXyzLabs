<?php

namespace Brainster;

class Admin {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function validate() {
        if (!empty($this->email) && !empty($this->password)) {
           if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
               return true;
           } else {
               Redirect::to("../../routes/admin.php?status=error&msg=", "Мејлот не е валиден!");
            }
        }
        return Redirect::to("../../routes/admin.php?status=error&msg=", "Полињата не смеат да бидат празни!");
    }

    public function find() {
        $db = connectToDb();

        $query = "SELECT * FROM admins WHERE email = ? AND `password` = ?";
		try {
			$stmt = $db->prepare($query);

			$stmt->execute([$this->email, $this->password]);

			if($stmt->rowCount() == 1) {
				return $stmt->fetch(\PDO::FETCH_ASSOC);
			} else {
				Redirect::to("../../routes/admin.php?status=error&msg=", "Невалиден е-мејл или пасворд!");
			}
		} catch (Exception $e) {
			Redirect::to("../../routes/admin.php?status=error&msg=", "Невалиден е-мејл или пасворд!");
		}
    }

    public function validateLogin() {
        $adminDb = $this->find();
        if ($this->email == $adminDb['email'] && $this->password == $adminDb['password']) {
            return true;
        } else {
            Redirect::to("../../routes/admin.php?status=error&msg=", "Невалиден е-мејл или пасворд!");
        }
    }

    public function login() {
        $this->validate();
        $this->validateLogin();

        session_start();
        $_SESSION['email'] = $this->email;

        if (isset($_SESSION['email'])) {
            Redirect::to("../../routes/dashboard.php");
        } else {
            Redirect::to("../../routes/admin.php?status=error&msg=", "Ве молиме логирајте се!");
        }
    }
}