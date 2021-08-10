@if ($sortBy !== $field)
    <i class="text-muted fas fa-sort"></i>
@elseif ($sortDirection == 'asc')
    <i class="text-gray-500 text-muted fas fa-sort-up"></i>
@else
    <i class="text-gray-500 text-muted fas fa-sort-down"></i>
@endif
