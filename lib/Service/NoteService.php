<?php
namespace OCA\CheckList\Service;

use OCA\CheckList\Db\Note;
use OCA\CheckList\Db\NoteMapper;

class NoteService {

  private $mapper;

  public function __construct(NoteMapper $mapper){
    $this->mapper = $mapper;
  }

  public function create(string $title, string $content, string $userId) {
		// leer
    $note = new Note();
    $note->setTitle($title);
    $note->setContent($content);
    $note->setUserId($userId);

		return $this->mapper->insert($note);
	}
}
