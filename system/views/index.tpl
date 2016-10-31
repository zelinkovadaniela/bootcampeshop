<h1>{$heading}</h1>

<ul>

{foreach $results as $result}
  <li>
    {$result['name']}
  </li>
{/foreach}
</ul>