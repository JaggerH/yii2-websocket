<?php
namespace jackh\websocket;

use Yii;

class WebSocketController extends \yii\console\Controller {

	public function actionStart() {
		(new WebSocket('localhost', 8088))->run();
	}

}
