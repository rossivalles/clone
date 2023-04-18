<?php 
class Post {
    private $idPost;
    private $idPropietario;
    private $idItem;
    private $Categoria;

    public function __construct($idPost, $idPropietario, $idItem, $Categoria) {
        $this->idPost = $idPost;
        $this->idPropietario = $idPropietario;
        $this->idItem = $idItem;
        $this->Categoria = $Categoria;
    }

    public function getIdPost() {
        return $this->idPost;
    }

    public function setIdPost($idPost) {
        $this->idPost = $idPost;
    }

    public function getIdPropietario() {
        return $this->idPropietario;
    }

    public function setIdPropietario($idPropietario) {
        $this->idPropietario = $idPropietario;
    }

    public function getIdItem() {
        return $this->idItem;
    }

    public function setIdItem($idItem) {
        $this->idItem = $idItem;
    }

    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($Categoria) {
        $this->Categoria = $Categoria;
    }
}
?>
