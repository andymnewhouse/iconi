@php
    $iconStyles = 'color:' . $form['styling']['color']. ';';
    if($form['styling']['type'] === 'builder') {
        $dropStyles = '';

        foreach($form['styling']['builder'] as $row) {
            if(isset($row['offsetX']) && isset($row['offsetY']) && isset($row['blur']) && isset($row['color'])) {
                $dropStyles .= " drop-shadow({$row['offsetX']} {$row['offsetY']} {$row['blur']} {$row['color']})";
            }
        }
        $iconStyles .= "filter: {$dropStyles}; -webkit-filter: {$dropStyles}";
    } else {
        $iconStyles .= $form['styling']['shadow'];
    }
@endphp

<div class="w-full h-full flex p-8 items-center justify-center" style="background: {{ $form['background']['color'] }}">
    @if($form['icon'])
    <x-dynamic-component :component="$form['icon']" :style="$iconStyles" />
    @endif
</div>
