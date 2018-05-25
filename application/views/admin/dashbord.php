
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#"> Admin Dashboard</a>
        </li>
    </ul>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span5 left">
            <div class="alert alert-info">
                <h3 style="color:">
                    <?php
                    $msg = $this->session->userdata('message');
                    if ($msg) {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h3>			
            </div>
        </div>
    </div>
</div>

<div class="sortable row-fluid">
    <a data-rel="tooltip" title="6 new members." class="well span3 top-block" href="#">
        <span class="icon32 icon-red icon-user"></span>
        <div>Total Members</div>
        <div>507</div>
        <span class="notification">6</span>
    </a>

    <a data-rel="tooltip" title="4 new pro members." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-star-on"></span>
        <div>Pro Members</div>
        <div>228</div>
        <span class="notification green">4</span>
    </a>

    <a data-rel="tooltip" title="$34 new sales." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-cart"></span>
        <div>Sales</div>
        <div>$13320</div>
        <span class="notification yellow">$34</span>
    </a>

    <a data-rel="tooltip" title="12 new messages." class="well span3 top-block" href="#">
        <span class="icon32 icon-color icon-envelope-closed"></span>
        <div>Messages</div>
        <div>25</div>
        <span class="notification red">12</span>
    </a>
</div>











