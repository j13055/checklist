<?php
namespace OCA\CheckList\Controller;

use OCP\IRequest;
use OCP\AppFramework\Controller;

use OCP\AppFramework\Http;
use OCP\AppFramework\Http\DataResponse;

use OCA\CheckList\Service\NoteService;

class NoteController extends Controller {

	private $userId;
	private $service;

	public function __construct($AppName, IRequest $request, $userId, NoteService $service){
		parent::__construct($AppName, $request);
		$this->userId = $userId;
		$this->service = $service;
	}

	/**
	 * @NoAdminRequired
	 * @param string $title
	 * @param string $content
	 */

	public function create(string $title, string $content) {
		// leer
		$serviceResponse = $this->service->create($title, $content, $this->userId);
		return new DataResponse($serviceResponse);
	}

}
