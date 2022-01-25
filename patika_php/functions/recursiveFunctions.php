<?php


//display numbers() with recursive function 

/*function display($number)
{
    echo $number;
    echo '<br>';

    if($number<5)
    {
        $number++;
        display($number);
    }
}

display(1);

*/


$categories=[
    [
        'id'=>1,
        'parent'=>0,
        'name'=>'Front End'
    ],
    [
        'id'=>2,
        'parent'=>0,
        'name'=>'Back End'
    ],
    [
        'id'=>3,
        'parent'=>2,
        'name'=>'PHP'
    ],
    [
        'id'=>4,
        'parent'=>1,
        'name'=>'CSS'
    ]
    ];

    function getCategories($category,$parent=0)
    {
        $html=" ";
        $html .="<ul>";
        foreach ($category as $value)
        {
            if($value['parent']==$parent)
            {
                $html .='<li>';
                $html .=$value['name'];
                $html .=getCategories($category,$value['id']);
                $html .='</li>';
            }
           
        }
        $html .='</ul>';
        return $html;
    }

echo   getCategories($categories);

        
        ?>