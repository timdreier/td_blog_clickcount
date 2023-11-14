<?php declare(strict_types=1);

namespace TimDreier\TdBlogClickcount\Domain\Traits;

trait PostModel
{
    /**
     * Number of views of post.
     *
     * @var int
     */
    protected int $txTdblogclickcount = 0;

    /**
     * @return int
     */
    public function getTxTdblogclickcount(): int
    {
        return $this->txTdblogclickcount;
    }

    /**
     * @param int $txTdblogclickcount
     */
    public function setTxTdblogclickcount(int $txTdblogclickcount): void
    {
        $this->txTdblogclickcount = $txTdblogclickcount;
    }

    public function addTxTdblogclickcount(): void
    {
        $this->txTdblogclickcount++;
    }
}
