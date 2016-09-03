<?php
    namespace yii\sergsova\fileManager\actions;
    use Yii;
    use yii\sergsova\fileManager\FileManager;
    use yii\base\Action;

    class RemoveAction extends Action{
        public function run(){
            return FileManager::getInstance()->removeFile(Yii::$app->request->post(FileManager::getInstance()->getAttributeName()));
        }
    }