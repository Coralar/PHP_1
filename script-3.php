<?php

class Product
{
    private string $title;
    private float $price;
    private array $components;

    /**
     * @param string $title
     * @param float $price
     */
    public function __construct(string $title, float $price = 0.0)
    {
        $this->title = $title;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    public function addComponents(Product $product): void
    {
        $this->components[] = $product;
        $this->calcPrice();
    }

    private function calcPrice(): void
    {
        $sum = 0.0;
        foreach (this->components as $component) {
            $sum += $component->getPrice();
        }
        $this->price = $sum;
    }
}
// Я устал списывать, вроде понимаю как работает код в решении, но как как надо мыслить чтобы самому это писать - я хз.
class Cart
{

}