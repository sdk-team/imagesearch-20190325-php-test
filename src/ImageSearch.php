<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20190325;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageResponse;
use AlibabaCloud\Tea\Roa\Roa;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class ImageSearch extends Roa
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpointHost = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpointHost);
    }

    /**
     * @param AddImageRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddImageResponse::fromMap($this->doRequestWithAction('AddImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/add', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageResponse::fromMap($this->doRequestWithAction('DeleteImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/delete', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param SearchImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SearchImageResponse::fromMap($this->doRequestWithAction('SearchImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/search', null, $request->headers, $request->body, $runtime));
    }

    /**
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchImageWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
