@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp
     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @if (Auth::user()->usertype=='Admin')

          <li class="nav-item {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>

            </ul>
          </li>
          @endif
          <li class="nav-item {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{($prefix=='/setups')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Setup
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('setups.student.class.view')}}" class="nav-link {{($route=='setups.student.class.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setups.student.session.view')}}" class="nav-link {{($route=='setups.student.session.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Session</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setups.student.shift.view')}}" class="nav-link {{($route=='setups.student.shift.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Shift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setups.exam.type.view')}}" class="nav-link {{($route=='setups.exam.type.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Exam Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('setups.subject.view')}}" class="nav-link {{($route=='setups.subject.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Subject Assign</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{($prefix=='/students')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Students
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.registration.view')}}" class="nav-link {{($route=='students.registration.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('students.registration.fee.view')}}" class="nav-link {{($route=='students.registration.fee.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registration Fee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('students.monthly.fee.view')}}" class="nav-link {{($route=='students.monthly.fee.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Fee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('students.exam.fee.view')}}" class="nav-link {{($route=='students.exam.fee.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Fee</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{($prefix=='/employees')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Employees
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employees.registration.view')}}" class="nav-link {{($route=='employees.registration.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.salary.view')}}" class="nav-link {{($route=='employees.salary.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.leave.view')}}" class="nav-link {{($route=='employees.leave.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Leave Record</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.attendance.view')}}" class="nav-link {{($route=='employees.attendance.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Attendance</p>
                </a>
              </li>
             </ul>
            </li>

          <li class="nav-item {{($prefix=='/marks')?'menu-open':''}}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Manage Marks
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('marks.view')}}" class="nav-link {{($route=='marks.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Marks Entry</p>
                    </a>
                  </li>
                </li>
            </ul>
        </li>

                <li class="nav-item {{($prefix=='/reports')?'menu-open':''}}">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Manage Reports
                        <i class="fas fa-angle-left right"></i>

                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('reports.attendance.view')}}" class="nav-link {{($route=='reports.attendance.view')?'active':''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Attendance Report</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('reports.id-card.view')}}" class="nav-link {{($route=='reports.id-card.view')?'active':''}}">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Student ID Card</p>
                        </a>
                      </li>
                    </li>
                </ul>
            </li>

      </nav>
      <!-- /.sidebar-menu -->
