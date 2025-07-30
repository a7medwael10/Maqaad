<?php

namespace App\Services;

class HomeService
{
    protected $galleryService;
    protected $newsService;
    protected $seatService;
    protected $partnerService;
    protected $questionsService;

    public function __construct(
        GalleryService $galleryService,
        NewsService $newsService,
        SeatService $seatService,
        PartnerService $partnerService,
        QuestionsService $questionsService
    ) {
        $this->galleryService = $galleryService;
        $this->newsService = $newsService;
        $this->seatService = $seatService;
        $this->partnerService = $partnerService;
        $this->questionsService = $questionsService;
    }

    public function getHomeData(): array
    {
        return [
            'galleries'     => $this->galleryService->getAllGalleries(6),
            'news'          => $this->newsService->getAllNews(3),
            'seats'         => $this->seatService->getAllSeats(),
            'partners'      => $this->partnerService->getAllPartners(),
            'questions'     => $this->questionsService->getAllQuestions(4),
        ];
    }
}
