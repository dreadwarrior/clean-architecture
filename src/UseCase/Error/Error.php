<?php

namespace Damianopetrungaro\CleanArchitecture\UseCase\Error;


class Error extends AbstractError
{
    /**
     * Error detail.
     *
     * @var string|null
     */
    protected $detail;

    /**
     * Error meta information.
     *
     * @var array
     */
    protected $meta;

    /**
     * Error pointer.
     * (Object containing references to the source of the error inspired by jsonapi.org)
     * @see http://jsonapi.org/format/#errors
     *
     * @var string|null
     */
    protected $pointer;

    /**
     * Error title.
     *
     * @var string|null
     */
    protected $title;


    /**
     * Error constructor.
     *
     * @param string $code Error code
     * @param ErrorType $type Specify error using an enum.
     * @param string|null $pointer Optional pointer.
     * @param string|null $title Optional title.
     * @param string|null $detail Optional detail.
     * @param array $meta Optional meta information.
     */
    public function __construct(string $code, ErrorType $type, string $pointer = null, string $title = null, string $detail = null, array $meta = [])
    {
        parent::__construct($code, $type);
        $this->title = $title;
        $this->detail = $detail;
        $this->pointer = $pointer;
        $this->meta = $meta;
    }

    /**
     * Return the detail.
     *
     * @return mixed
     */
    public function detail() : ?string
    {
        return $this->detail;
    }

    /**
     * Return the meta information.
     *
     * @return array
     */
    public function meta() : array
    {
        return $this->meta;
    }

    /**
     * Return the pointer.
     *
     * @return mixed
     */
    public function pointer() : ?string
    {
        return $this->pointer;
    }

    /**
     * Return the title.
     *
     * @return mixed
     */
    public function title() : ?string
    {
        return $this->title;
    }
}