<?php

namespace Atlassian\HipchatBundle\Manager;

use Atlassian\HipchatBundle\Model\History;
use Atlassian\HipchatBundle\Model\Room;
use Guzzle\ConfigOperationsBundle\GuzzleClient;
use Atlassian\HipchatBundle\Exception\UndefinedRoomException;

/**
 * Manages Hipchat operations
 *
 * @author Pierre Rolland <roll.pierre@gmail.com>
 */
class HipchatManager
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var array
     */
    protected $roomsConfiguration;

    /**
     * @param GuzzleClient $client
     * @param array        $roomsConfiguration
     */
    public function __construct(GuzzleClient $client, array $roomsConfiguration)
    {
        $this->client = $client;
        $this->roomsConfiguration = $roomsConfiguration;
    }

    /**
     * @param string $room
     *
     * @return Room
     *
     * @throws UndefinedRoomException
     */
    public function getRoom($room)
    {
        if (!array_key_exists($room, $this->roomsConfiguration)) {
            throw new UndefinedRoomException(sprintf('Room %s is not defined in configuration', $room));
        }

        return $this
            ->client
            ->getRoom([
                'room_id'        => $this->roomsConfiguration[$room]['id'],
                'auth_token'     => $this->roomsConfiguration[$room]['token']
            ]);
    }

    /**
     * @param string $room
     *
     * @return History
     *
     * @throws UndefinedRoomException
     */
    public function getRoomHistory($room)
    {
        if (!array_key_exists($room, $this->roomsConfiguration)) {
            throw new UndefinedRoomException(sprintf('Room %s is not defined in configuration', $room));
        }

        return $this
            ->client
            ->getRoomHistory([
                'room_id'        => $this->roomsConfiguration[$room]['id'],
                'auth_token'     => $this->roomsConfiguration[$room]['token']
            ]);
    }

    /**
     * @param string $room
     * @param string $message
     * @param string $color
     * @param bool   $notify
     * @param string $format
     *
     * @throws UndefinedRoomException
     */
    public function createNotification($room, $message, $color = 'green', $notify = false, $format = 'text')
    {
        if (!array_key_exists($room, $this->roomsConfiguration)) {
            throw new UndefinedRoomException(sprintf('Room %s is not defined in configuration', $room));
        }

        $this
            ->client
            ->createNotification([
                'room_id'        => $this->roomsConfiguration[$room]['id'],
                'auth_token'     => $this->roomsConfiguration[$room]['token'],
                'color'          => $color,
                'message'        => $message,
                'notify'         => $notify,
                'message_format' => $format
            ]);
    }
}
