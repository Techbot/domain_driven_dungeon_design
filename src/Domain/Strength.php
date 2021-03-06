<?php namespace DeckOfCards\Domain;

final class Strength
{
    /**
     * @var string
     */
    private $strength;

    /**
     * @param string $strength
     */
    private function __construct($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @param $strength
     * @return Strength
     * @throws IncorrectStrengthValue
     */
    public static function fromString($strength)
    {
        $strength = strtoupper((string) $strength);
        if ($strength > 100) {
             throw new IncorrectStrengthValue();
        }
        return new Strength($strength);
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->strength;
    }
}
