<?php
/**
 * default main controller
 * define your actions here, any defined methods will be accessible as public facing pages
 */
class PageController extends CoreController{

  /**
   * initial view to be rendered before others
   * this view will be triggered by TethCoreApplication
   * $this->original_path will be set to the original url the application was triggered with
   * normal behaviour is to call a render on that var inside the initial_view
   * allows you do run a general action before all other controller code
   */
  public $intial_view="application";
  
  public function index(){}
}
?>