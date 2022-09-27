<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
class VidHostController extends Controller
{
    //
    function fileUpload( Request $file){
      $video = new Videos;//create empty model object
       //заносим в свойство модели значение, занесенное пользователем
       $video->UserId=$file->UserId;
       $video->videoPath=$file->videoPath;
       $video->nameVideo=$file->nameVideo;
       $video->sizeVideo=$file->sizeVideo;
       $video->formatVideo=$file->formatVideo;
       $video->GenTimeVi=$file->GenTimeVi;

       $video->save();//save model into DB table
    }
}
