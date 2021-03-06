<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 14.10.18
 * Time: 23:31.
 */

namespace Foundation\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $notification = (object) $this->data;
        $resource = [
            'id'      => $this->getKey(),
            'title'   => $notification->title,
            'message' => $notification->message,
            'target'  => $notification->target,
            'tag'     => $notification->tag,
            'is_read' => isset($this->read_at) ? true : false,
        ];

        return $resource;
    }
}
