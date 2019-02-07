<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [

            'title' => $this->title,
            'body' => $this->body
        ];
    }

    /**
     * Return specific fields
     *
     * @return $array
     * @author 
     **/
    public function with($request)
    {
        return [

            'version' => '1.0',
            'author' => '1.0'
        ];
    }
}
