<?php

// class Article {
//    private $id;
//    private $title;
//    private $content;
//    private $publishDate;
//    private $photoId;

//    public function __construct($id, $title, $content, $publishDate, $photoId) {
//       $this->id = $id;
//       $this->title = $title;
//       $this->content = $content;
//       $this->publishDate = $publishDate;
//       $this->photoId = $photoId;
//    }

//    public function getId() {
//       return $this->id;
//    }

//    public function getTitle() {
//       return $this->title;
//    }

//    public function getContent() {
//       return $this->content;
//    }

//    public function getPublishDate() {
//       return $this->publishDate;
//    }

//    public function getPhotoId() {
//       return $this->photoId;
//    }

//    public function setTitle($title) {
//       $this->title = $title;
//    }

//    public function setContent($content) {
//       $this->content = $content;
//    }

//    public function setPublishDate($publishDate) {
//       $this->publishDate = $publishDate;
//    }

//    public function setPhotoId($photoId) {
//       $this->photoId = $photoId;
//    }

//    public function getFormattedPublishDate($format) {
//       return date($format, strtotime($this->publishDate));
//    }

//    public function getExcerpt($length) {
//       $excerpt = strip_tags($this->content);
//       if (strlen($excerpt) > $length) {
//          $excerpt = substr($excerpt, 0, $length) . '...';
//       }
//       return $excerpt;
//    }

//    public function hasPhoto() {
//       return !empty($this->photoId);
//    }

// }

// ?>
