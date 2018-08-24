<?php
namespace Brainster;

class Product {
    private $title;
    private $subtitle;
    private $url;
    private $photo;
    private $desc;

    public function __construct($title, $subtitle, $url, $photo, $desc) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->url = $url;
        $this->photo = $photo;
        $this->desc = $desc;
    }

    public static function getAll() {
        $db = connectToDb();
        
        $query = "SELECT * FROM products";
        $stmt = $db->query($query);
        return $stmt;
    }

    public function validate() {
        $populated = implode("&" ,["oldName=$this->title", "oldSubtitle=$this->subtitle", "oldUrl=$this->url", "oldPhoto=$this->photo", "oldDesc=$this->desc"]);

        // Validate description input to be less than 200 chars
        if (count($this->desc) > 200) {
            throw new \Exception('Описот на производот го надминува лимитот (200 карактери)!' . "&$populated");
        } elseif (empty($this->title) || empty($this->subtitle) || empty($this->url) || empty($this->photo) || empty($this->desc)) {
            throw new \Exception('Ве молиме пополнете ги сите полиња!' . "&$populated");
        }
    }

    public function save() {
        $this->validate();
        $db = connectToDb();            
        $query = "INSERT INTO products (title, subtitle, photo, url, description) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $db->prepare($query);

        $stmt->execute([$this->title, $this->subtitle, $this->url, $this->photo, $this->desc]);
    }

    public function update($id) {
        $db = connectToDb();
      
        $query = "UPDATE products SET title = ?, subtitle = ?, url = ?, description = ?, photo = ? WHERE id = ? LIMIT 1";

        try {
            $stmt = $db->prepare($query);
            $stmt->execute([$this->title, $this->subtitle, $this->url, $this->desc, $this->photo, $id]);
            Redirect::to("../../routes/dashboard.php?status=success&msg=", "Промената е направена!");
        } catch(PDOException $e) {
            $e->getMessage();
            Redirect::to("../../routes/dashboard.php?status=error&msg=", "Настана грешка, обидете се повторно!");
        }
    }

    public static function delete($id) {
        $db = connectToDb();

        $query = "DELETE FROM products WHERE id = :id LIMIT 1";
        
        try {
            $stmt = $db->prepare($query);
            $stmt->execute(['id' => $id]);
            Redirect::to("../../routes/dashboard.php?status=success&msg=", "Производот е избришан!");
        } catch(PDOException $e) {
            $e->getMessage();
            Redirect::to("../../routes/dashboard.php?status=error&msg=", "Настана грешка, обидете се повторно!");
        }
    }
}