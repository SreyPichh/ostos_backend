<?php

namespace App\Containers\AppSection\Quote\UI\API\Controllers;

use App\Containers\AppSection\Quote\UI\API\Requests\CreateQuoteRequest;
use App\Containers\AppSection\Quote\UI\API\Requests\DeleteQuoteRequest;
use App\Containers\AppSection\Quote\UI\API\Requests\GetAllQuotesRequest;
use App\Containers\AppSection\Quote\UI\API\Requests\FindQuoteByIdRequest;
use App\Containers\AppSection\Quote\UI\API\Requests\UpdateQuoteRequest;
use App\Containers\AppSection\Quote\UI\API\Transformers\QuoteTransformer;
use App\Containers\AppSection\Quote\Actions\CreateQuoteAction;
use App\Containers\AppSection\Quote\Actions\FindQuoteByIdAction;
use App\Containers\AppSection\Quote\Actions\GetAllQuotesAction;
use App\Containers\AppSection\Quote\Actions\UpdateQuoteAction;
use App\Containers\AppSection\Quote\Actions\DeleteQuoteAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createQuote(CreateQuoteRequest $request): JsonResponse
    {
        $quote = app(CreateQuoteAction::class)->run($request);
        return $this->created($this->transform($quote, QuoteTransformer::class));
    }

    public function findQuoteById(FindQuoteByIdRequest $request): array
    {
        $quote = app(FindQuoteByIdAction::class)->run($request);
        return $this->transform($quote, QuoteTransformer::class);
    }

    public function getAllQuotes(GetAllQuotesRequest $request): array
    {
        $quotes = app(GetAllQuotesAction::class)->run($request);
        return $this->transform($quotes, QuoteTransformer::class);
    }

    public function updateQuote(UpdateQuoteRequest $request): array
    {
        $quote = app(UpdateQuoteAction::class)->run($request);
        return $this->transform($quote, QuoteTransformer::class);
    }

    public function deleteQuote(DeleteQuoteRequest $request): JsonResponse
    {
        app(DeleteQuoteAction::class)->run($request);
        return $this->noContent();
    }
}
