<?php

class NameArrayOperations
{
    private $names = [];

    // Constructor to initialize the array with 10 names.
    public function __construct()
    {
        $this->names = ['Alice', 'Bob', 'Charlie', 'David', 'Alice', 'Eve', 'Bob', 'Frank', 'Grace', 'David'];
    }

    // Display the contents using foreach
    public function displayNames()
    {
        echo "1. Names in the array:\n";
        foreach ($this->names as $name) {
            echo "$name\n";
        }
        echo "\n";
    }

    // Display the array in sorted way
    public function displaySortedNames()
    {
        echo "2. Names in sorted order:\n";
        sort($this->names);
        foreach ($this->names as $name) {
            echo "$name\n";
        }
        echo "\n";
    }

    // Display the array in reverse sorted way
    public function displayReverseSortedNames()
    {
        echo "3. Names in reverse sorted order:\n";
        rsort($this->names);
        foreach ($this->names as $name) {
            echo "$name\n";
        }
        echo "\n";
    }

    // Display the elements which are not duplicate
    public function displayUniqueNames()
    {
        echo "4. Unique names in the array:\n";
        $uniqueNames = array_unique($this->names);
        foreach ($uniqueNames as $name) {
            echo "$name\n";
        }
        echo "\n";
    }

    // Search for an element in the array
    public function searchName($searchName)
    {
        echo "5. Searching for '$searchName' in the array:\n";
        $index = array_search($searchName, $this->names);
        if ($index !== false) {
            echo "'$searchName' found at index $index.\n";
        } else {
            echo "'$searchName' not found in the array.\n";
        }
        echo "\n";
    }
}

// Create an instance of the class
$nameArray = new NameArrayOperations();

// Perform the operations
$nameArray->displayNames();
$nameArray->displaySortedNames();
$nameArray->displayReverseSortedNames();
$nameArray->displayUniqueNames();
$nameArray->searchName('Eve');
$nameArray->searchName('John');
