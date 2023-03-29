<?php

namespace Kanboard\Plugin\SubtasksOnBoard;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->helper->register('subtasklistHelper', '\Kanboard\Plugin\SubtasksOnBoard\Helper\SubtasklistHelper');
        $this->template->hook->attach('template:board:private:task:after-title', 'SubtasksOnBoard:board/subtasklist');
        $this->hook->on("template:layout:css", array("template" => "plugins/SubtasksOnBoard/Assets/css/subtasksonboard.css"));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'SubtasksOnBoard';
    }

    public function getPluginDescription()
    {
        return t('Displays the subtasks of a task on the task card on the board. One can change state of a subtask directly on the card. Supports display of subtask duedate if the plugin "Subtaskdate" is installed.');
    }

    public function getPluginAuthor()
    {
        return 'JustFxDev, Till Schlueter';
    }

    public function getPluginVersion()
    {
        return '1.0.9';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.20';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/JustFxDev/SubtaskOnBoard';
    }
}