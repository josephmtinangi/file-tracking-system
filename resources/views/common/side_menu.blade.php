<div class="side-menu">

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <div class="brand-wrapper">
                <!-- Hamburger -->
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Brand -->
                <div class="brand-name-wrapper">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        FTS
                    </a>
                </div>
            </div>

        </div>

        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">

                <!-- Principal -->
                <li class="divider">Principal</li>
                <!-- //Principal -->

                <!-- Dean of School -->
                <li class="divider">Dean of School</li>
                <!-- //Dean of School -->

                <!-- Head of department -->
                <li class="divider">Head of department</li>
                <!-- //Head of department -->

                <!-- Dean of Students -->
                <li class="divider">Dean of Students</li>
                <!-- //Dean of Students -->

                <!-- Medical officer -->
                <li class="divider">Medical officer</li>
                <!-- //Medical officer -->

                <!-- Student -->
                <li class="divider">Student</li>
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-postpone">
                        <span class="glyphicon glyphicon-flag"></span> Postpone <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-postpone" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li @if(Request::is('postpone/exams')) class="active" @endif><a
                                            href="{{ url('/postpone/exams') }}">Exams</a></li>
                                <li><a href="#">Studies</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-scale"></span> Appeal</a></li>
                <!-- //Student -->

                <li class="divider">Staff</li>
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-postpones">
                        <span class="glyphicon glyphicon-flag"></span> Postpones <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-postpones" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Processed</a></li>
                                <li><a href="#">Unprocessed</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Dropdown-->
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-appeals">
                        <span class="glyphicon glyphicon-flag"></span> Appeals <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-appeals" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="#">All</a></li>
                                <li><a href="#">Processed</a></li>
                                <li><a href="#">Unprocessed</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- Common -->
                <li><a href="#">Logout</a></li>
                <!-- //Common -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>