<svg xmlns="http://www.w3.org/2000/svg" width="{{ $size }}" height="{{ $size }}" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    @if ($name == "dashboard")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
        <path d="M13.45 11.55l2.05 -2.05"></path>
        <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
    @elseif ($name == "checkbox")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M9 11l3 3l8 -8"></path>
        <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
    @elseif ($name == "hourglass")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M6.5 7h11"></path>
        <path d="M6.5 17h11"></path>
        <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z"></path>
        <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z"></path>
    @elseif ($name == "circle-plus")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
        <path d="M9 12h6"></path>
        <path d="M12 9v6"></path>
    @elseif ($name == "logout")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
        <path d="M9 12h12l-3 -3"></path>
        <path d="M18 15l3 -3"></path>
    @elseif ($name == "garden-cart")
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M17.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
        <path d="M6 8v11a1 1 0 0 0 1.806 .591l3.694 -5.091v.055"></path>
        <path d="M6 8h15l-3.5 7l-7.1 -.747a4 4 0 0 1 -3.296 -2.493l-2.853 -7.13a1 1 0 0 0 -.928 -.63h-1.323"></path>
    @else
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"></path>
        <path d="M12 9h.01"></path>
        <path d="M11 12h1v4h1"></path>
    @endif
</svg>