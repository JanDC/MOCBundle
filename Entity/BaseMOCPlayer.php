<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 3/22/14
 * Time: 7:10 PM
 */

namespace Jan\MOCBundle\Entity;

/**
 * Class BaseMOCPlayer
 *
 * This class provider the basic wrapper functionalities for Music On Console
 *
 * @package Jan\MOCBundle\Entity
 */
class BaseMOCPlayer
{

    private $connection;


    public function __construct()
    {
        //get connection
        /** TODO: implement remote locations */

        //start the server
        $this->executeCommand("mocp -S");

    }


    private function executeCommand($command)
    {
        /** TODO: implement remote locations */
        if ($this->getConnectionType() == PlayerConnectionType::LOCALHOST) {
            `$command`;
        } else {
         //fallback: execute locally
            `$command`;
        }
    }

    /**
     * start playing the current song
     */
    public function play()
    {
        $this->executeCommand("mocp -p");
    }

    /**
     * append to playlist
     * note: $filepath is preferably absolute
     */
    public function append($filepath)
    {
        $this->executeCommand("mocp -a " . $filepath);
    }

    /**
     * Pause
     */
    public function pause()
    {
        $this->executeCommand("mocp -P");
    }

    /**
     * Unpause
     */
    public function unpause()
    {
        $this->executeCommand("mocp -U");
    }

    /**
     * Next
     */
    public function nextSong()
    {
        $this->executeCommand("mocp -f");
    }

    /**
     * previousSong
     */
    public function previousSong()
    {
        $this->executeCommand("mocp -r");
    }

    /**
     * Set Volume
     * note: this is the system volume
     */
    public function setVolume($volume)
    {
        $this->executeCommand("mocp -v " . $volume);
    }

    private function getConnectionType()
    {
        if (is_object($this->connection)) {
            return $this->connection->getId();
        }

        return null;

    }


}