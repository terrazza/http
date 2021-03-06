<?php
namespace Terrazza\Component\Http\Request;
use Psr\Http\Message\UploadedFileInterface;

interface HttpClientRequestInterface extends HttpRequestInterface {
    public function withContentType(string $contentType) :self;
    public function withContent(string $contentType, $body) : self;
    //
    public function getPathParam(string $routeUri, string $argumentName) :?string;
    public function getQueryParam(string $argumentName) :?string;
    //
    public function withUploadedFiles(array $uploadFiles) : self;
    public function withUploadedFile(string $formDataName, UploadedFileInterface $uploadedFile) : self;
}