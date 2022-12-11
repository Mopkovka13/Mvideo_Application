<?php
class Product2
{
    public static function addProduct(
        $image,
        string $name,
        string $description,
        int $price,
        int $actionId
        
        
        ) {
        $error = array();
        if (empty($name)) {
            $error[] = 'Название отсутствует!';
        }
        if (empty($description)) {
            $error[] = 'Посавщик отсутствует!';
        }
        if (empty($price)) {
            $error[] = 'цена отсутствует!';
        }
        if (empty($actionId)) {
            $error[] = 'Название отсутствует!';
        }
        $fileName = static::loadPicture();
        if (empty($fileName)) {
            $error[] = "Проблемы с загрузкой файла";
        }
        if (empty($error)) {
            ProductModel2::create($fileName, $name, $description, $price, $actionId);
            return null;
        }
        return $error;
    }
    public static function getAction():array
    {
        return ProductModel2::getAction();
    }
    public static function getActionById($id)
    {
        $action = ProductModel2::getActionById($id);
        if (empty($action)) {
            return "Элемент не найден";
        }
        return $action;
    }
    public static function Get():array
    {
        $products = ProductModel2::read();
        return $products;
    }

    public static function getProduct($id)
    {
        $product = ProductModel2::getById($id);
        if (empty($product)) {
            return "Элемент не найден";
        }
        return $product;
    }


    public static function changeProduct(
        int $id,
        string $old_img,
        string $name,
        string $description,
        int $price,
        $picture,
        int $actionId
    ) {
        
        if (empty($img["tmp_name"])) {
            ProductModel2::update($id, $old_img, $name, $description, $price, $actionId);
            return null;
        }
        $error[] = self::deletePicture($old_img);
        $fileName = static::loadPicture($img);
        ProductModel2::update($id, $fileName, $name, $description, $price, $actionId);
        return null;
    }

    public static function deletePicture($pictureName): string
    {
        if (strpos($pictureName, "..")) { // для того чтобы избежать перескока по директориям
            return "Некорректное название";
        }
        var_dump(MEDIA_PATH . $pictureName);
        if (unlink(MEDIA_PATH . $pictureName)) {
            return "";
        }
        return "Ошибка при удалении файла";
    }

    public static function deleteElement($id): string
    {
        $product = ProductModel2::getById($id); // берем элемент чтобы удалить картинку
        if (empty($product)) {
            return "Элемент не найден";
        }
        var_dump($product);
        $error = self::deletePicture($product[3]);
        ProductModel2::delete($id); // стоит впереди чтобы даже если картинки каким то образом не было, запись все равно удалилась
        if ($error) {
            return $error;
        }
        return "";
    }
    public static function loadPicture()
    {
        /**
         * @param file -- Массив $_FILES['userfile'] из формы
         * Метод загрузки картинки на сервер
         * возвращает имя файла
         * @return string|null
         */
        move_uploaded_file($_FILES['picture']['tmp_name'],  MEDIA_PATH . $_FILES['picture']['name']);
        return $_FILES['picture']['name'];
    }
}