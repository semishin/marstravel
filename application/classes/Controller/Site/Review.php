<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Review extends Controller_Site
{
    const LIMIT_ON_PAGE = 8;
    const LIMIT_ON_PAGE_BANNERS = 1;

    public function action_index()
    {
        $this->set_metatags_and_content('review', 'page');
        $review = ORM::factory('Review')
            ->where('active','=',1)
            ->limit(self::LIMIT_ON_PAGE)
            ->order_by('created_at', 'DESC')
            ->find_all();
        $count_review = ORM::factory('Review')
            ->where('active','=',1)
            ->count_all();


        $count_review_end = $this->ending($count_review);


        $this->template->review = $review;
        $this->template->count_review = $count_review;
        $this->template->count_review_end = $count_review_end;
        $this->template->tour = ORM::factory('Tour')->where('active','=',1)->order_by('position','asc')->find_all();
        $this->template->set_layout('layout/site/global');
    }


    public function action_ajax()
    {
        $this->set_metatags_and_content('review', 'page');
        $tour_id = $this->request->post('tour_id');
        if($tour_id != 'null') {
            $review = ORM::factory('Review')
                ->where('active', '=', 1)
                ->where('tour_id', '=', $tour_id)
                ->order_by('created_at', 'DESC')
                ->limit(self::LIMIT_ON_PAGE)
                ->find_all();
            $count_review = ORM::factory('Review')
                ->where('active', '=', 1)
                ->where('tour_id', '=', $tour_id)
                ->count_all();
            $count_review_end = $this->ending($count_review);

            exit(
            json_encode(array('html' => View::factory('site/review/ajax', array('review' => $review, 'count_review' => $count_review))->render(),
                'count_review' => $count_review_end, 'more' => $count_review > self::LIMIT_ON_PAGE)));
        }else{
            $review = ORM::factory('Review')
                ->where('active', '=', 1)
                ->limit(self::LIMIT_ON_PAGE)
                ->order_by('created_at', 'DESC')
                ->find_all();
            $count_review = ORM::factory('Review')
                ->where('active', '=', 1)
                ->count_all();
            $count_review_end = $this->ending($count_review);
            exit(
            json_encode(array('html' => View::factory('site/review/ajax', array('review' => $review, 'count_review' => $count_review))->render(),
                'count_review' => $count_review_end,  'more' => $count_review > self::LIMIT_ON_PAGE)));
        }
    }

    public function action_save()
    {

        $name = $this->request->post('name');
        $fileName = $this->request->post('fileName');
        $rating = $this->request->post('rating');
        if($fileName) {
            foreach ($fileName as $item) {
                copy('temp/'.$item, 'files/comment/'.$item);
                copy('temp/'.$item, 'files/comment/thumb/'.$item);
                $arryImages[] =  '/files/comment/'.$item;
            }
            $image = json_encode($arryImages);
        }else{
            $image = null;
        }
        $tour_id = $this->request->post('tour_id');
        $text = $this->request->post('text');
        $review = ORM::factory('Review');
        $review->name = $name;
        $review->start_date = $this->request->post('start_date');
        $review->end_date = $this->request->post('end_date');
        $review->tour_id = $tour_id;
        $review->text = $text;
        $review->image = $image;
        $review->rating = $rating;
        $review->email = $this->request->post('email');
        $review->active = 0;
        $review->save();
        exit(json_encode(array('message' => 'Спасибо за ваш отзыв')));
    }

    public function action_file()
    {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = substr(md5(microtime()), rand(0, 5), rand(11, 16)).$_FILES['file']['name'];
            if(move_uploaded_file($tempFile,'temp/'.$fileName)){
                exit(json_encode(array('fileName' => $fileName)));
            } else {
                exit(json_encode(array('message' => null)));
            }
        }
    }

    public function action_more()
    {
        $offset = $this->request->post('offset');
        $sortReview = $this->request->post('sortReview');
        if (!$offset) {
            $this->forward_404();
        }

        if($sortReview && $sortReview != 'null'){
            $review = ORM::factory('Review')
                ->where('active','=',1)
                ->where('tour_id', '=', $sortReview)
                ->order_by('created_at', 'DESC')
                ->limit(self::LIMIT_ON_PAGE)
                ->offset($offset)
                ->find_all();

            $count_review = ORM::factory('Review')
                ->where('active','=',1)
                ->where('tour_id', '=', $sortReview)
                ->count_all();
            $count_review_end = $this->ending($count_review);
            exit(
            json_encode(
                array(
                    'html' => View::factory('site/review/more', array(
                        'review' => $review
                    ))->render(),
                    'count_review' => $count_review_end,
                    'more' => $count_review > $offset + self::LIMIT_ON_PAGE,
                )
            )
            );
        }

        $review = ORM::factory('Review')
            ->where('active','=',1)
            ->order_by('created_at', 'DESC')
            ->limit(self::LIMIT_ON_PAGE)
            ->offset($offset)
            ->find_all();

        $count_review = ORM::factory('Review')
            ->where('active','=',1)
            ->count_all();
        $count_review_end = $this->ending($count_review);
        exit(
        json_encode(
            array(
                'html' => View::factory('site/review/more', array(
                    'review' => $review
                ))->render(),
                'count_review' => $count_review_end,
                'more' => $count_review > $offset + self::LIMIT_ON_PAGE,
            )
        )
        );
    }

    public function ending($count_review){
        $lastInt = $count_review%10;
        if($count_review == 11 || $count_review == 12 || $count_review == 13 ||$count_review == 14){
            $count_review  =  $count_review. ' отзывов о нашей работе';
        } else {
            if ($lastInt == 1) {
                $count_review = $count_review . ' отзыв о нашей работе';
            }else {
                if ($lastInt == 2 || $lastInt == 3 || $lastInt == 4) {
                    $count_review = $count_review . ' отзыва о нашей работе';
                } else {
                    $count_review = $count_review . ' отзывов о нашей работе';
                }
            }
        }
        return $count_review;
    }
}
