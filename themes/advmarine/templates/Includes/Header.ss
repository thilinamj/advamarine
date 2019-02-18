<header class="header js-header">
    <div class="grid-container">
    <div class="grid-x header__nav">
        <div class="header__logo">
            <a href="$BaseHref">
                <img src="{$ThemeDir}/static/images/logo.png">
            </a>
        </div>

        <a class="header__hamburger" data-toggle="mobileMenu">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </a>

        <div class="header__menu">
            <nav>
                <ul class="menu">
                    <% loop $Menu(1) %>
                        <li>
                            <a class="<% if $LinkingMode == $current %>active<% end_if %>" href="$Link">
                                $MenuTitle
                            </a>
                            <%--<% if $isSection %>--%>
                            <% if $Children %>
                                <ul class="sub-menu secondary">
                                    <% loop $Children %>
                                        <li class="<% if $isCurrent %>current<% else_if $isSection %>section<% end_if %>">
                                            <a href="$Link">$MenuTitle</a>
                                        </li>
                                    <% end_loop %>
                                </ul>
                            <% end_if %>
                            <%--<% end_if %>--%>
                        </li>
                    <% end_loop %>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</header>