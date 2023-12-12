<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
          <x-application-mark class="block h-9 w-auto" />
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-0 sm:-my-px sm:ml-10 sm:flex">

          <!-- link list Creation -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Creation') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Access') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Roles') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Permissions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Users') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Sites') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Departaments') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Municipalities') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Zoning') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Neighborhoods') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Social Security') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Health Promoting Entity') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Pension Fund') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Severance Pay Fund') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Labor Risks Administrator') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Compensation Fund') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Document') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Personal Identification') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Drivers Licenses') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Certified Courses') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Policies and Insurance') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Legalization of vehicles') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Vehicle Types') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Motorcycles') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Charge') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Special') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Product Types') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Express Courier') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Logistics') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Tourism Passengers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Urban Transportation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Intermunicipal Transfers') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-3">
                  <x-slot name="title">
                    {{ __('Service Types') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Express Courier') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Logistics') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Tourism Passengers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Urban Transportation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Intermunicipal Transfers') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Systems -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Systems') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('SG') }} - {{ __('Management') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Document Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Variable Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Configuration Document') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corrective Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Opportunities for Improvement') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('SG') }} - {{ __('Logistics') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Document Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Variable Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Configuration Document') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corrective Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Opportunities for Improvement') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('SG') }} - {{ __('Commercial') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Document Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Variable Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Configuration Document') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corrective Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Opportunities for Improvement') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('SG') }} - {{ __('Operative') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Document Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Variable Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Configuration Document') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corrective Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Opportunities for Improvement') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('SG') }} - {{ __('Continuous Improvement') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Document Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Variable Creation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Configuration Document') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corrective Actions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Opportunities for Improvement') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Database -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Database') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Company Creation') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Legal Information') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Financial Information') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Technical Information') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Human Resources Creation') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Partners') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Messaging Contractors') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight Contractors') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Special Service Contractors') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Providers Creation') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Products') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Services') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Providers') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Partner Companies Creation') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Messaging') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Special Services') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Vehicle Fleet Creation') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Messaging') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Special Services') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Creation Of Trainings') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Training Plan') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Compliance Support') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Training Efficiency') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Corresponding Indicators') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Creation Continuous Improvement') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Master List') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Documentary Procedures') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Documentary Records') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Consultation Documents') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Management -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Management') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Committees') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Committee Minutes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Process Minutes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive of Minutes') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Procedures') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Implementation of Procedures') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Procedures in Process') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Procedures Archive') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Documents') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Legal Matrix') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Analysis Matrix') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('EPP Matrix') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Programs') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Commercial -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Commercial') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Service Portfolio') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Express Courier') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Logistics') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Tourism Passengers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Urban Transportation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Intermunicipal Transfers') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Marketing Plan') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Business Opportunity') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Business Tracking') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Business Archive') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Potential Customer') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Public Bids') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Commercial Proposal') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Commercial Follow-up') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Permanent Contracts') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Customers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Contractual Legalization') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Economic Conditions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Contract Archive') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Occasional Contracts') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Service Order') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Contract Archive') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Logistic -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Logistics') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Partners') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Creation of Positions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Functions Manual') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Contract Minutes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Legalization of Contract') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Social Security Affiliations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Delivery of Endowments') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Delivery of Equipment and Tools') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Notifications') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Attendance and Absenteeism Control') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Attendance and Training Control') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Medical Entrance Examinations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Periodic Medical Examinations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Medical Examinations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Performance Evaluations') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Contractors') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Functions Manual') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Contract Minutes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Legalization of Contract') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Business Collaboration Agreement') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Social Security Follow-up') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Notifications') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Attendance and Absenteeism Control') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Attendance and Training Control') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Performance Evaluations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('System Activations') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Providers') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Contract Minutes') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Legalization of Contract') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Notifications') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Performance Evaluations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Purchase Order') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Programs') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Vehicle Fleet Replacement') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Control of Traffic Infractions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Accident Control and Analysis Report') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('User Service Procedures') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Bidirectional Communications System') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Preventive Maintenance Review') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('Vehicle Fleet Replacement') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('Control of Traffic Infractions') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('Accident Control and Analysis Report') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('User Service Procedures') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('Bidirectional Communications System') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Archive') }} {{ __('Preventive Maintenance Review') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Operative -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Operative') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Request for Services') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Express Courier') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Logistics') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Express Freight') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Tourism Passengers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Urban Transportation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Intermunicipal Transfers') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Services Programming') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Operator Assignment') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Acceptance Operator') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Service Tracking') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Confirmation Operator') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Start of Service') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Service in Execution') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Completed Services') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Canceled Services') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Service Settlement') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Customer Settlement') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Settlement for Operators') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Service Rating') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('User Qualification') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Operator Qualification') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

          <!-- link list Financial -->
          <div class="relative py-4">
            <x-dropdown-levels level="first">
              <x-slot name="title">
                {{ __('Financial') }}
              </x-slot>
              <x-slot name="content">
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Accounts Receivable') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('January') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('February') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('March') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('April') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('May') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('June') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('July') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('August') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('September') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('October') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('November') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('December') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Accounts Payable') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('January') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('February') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('March') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('April') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('May') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('June') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('July') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('August') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('September') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('October') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('November') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#" class="text-center">
                      {{ __('December') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Revenue Movement') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Sales invoicing') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Past Due Portfolio') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Revenue Vouchers') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Sales Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Outgoing Movement') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Accounts Payable') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Overdue Obligations') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Proof of Expenditure') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Expenditure Statistics') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
                <x-dropdown-levels level="second" class="px-2">
                  <x-slot name="title">
                    {{ __('Budget Analysis') }}
                  </x-slot>
                  <x-slot name="content">
                    <x-dropdown-link href="#">
                      {{ __('Balance Reconciliation') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Cost Structure') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Description of Costs') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Annual Budget') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Monthly Follow-up') }}
                    </x-dropdown-link>
                    <x-dropdown-link href="#">
                      {{ __('Closing Report') }}
                    </x-dropdown-link>
                  </x-slot>
                </x-dropdown-levels>
              </x-slot>
            </x-dropdown-levels>
          </div>

        </div>
      </div>

      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <!-- Teams Dropdown -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="ml-3 relative">
          <x-dropdown align="right" width="60">
            <x-slot name="trigger">
              <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                  {{ Auth::user()->currentTeam->name }}

                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                  </svg>
                </button>
              </span>
            </x-slot>

            <x-slot name="content">
              <div class="w-60">
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                  {{ __('Team Settings') }}
                </x-dropdown-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-dropdown-link href="{{ route('teams.create') }}">
                  {{ __('Create New Team') }}
                </x-dropdown-link>
                @endcan

                <!-- Team Switcher -->
                @if (Auth::user()->allTeams()->count() > 1)
                <div class="border-t border-gray-200 dark:border-gray-600"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-switchable-team :team="$team" />
                @endforeach
                @endif
              </div>
            </x-slot>
          </x-dropdown>
        </div>
        @endif

        <!-- Settings Dropdown -->
        <div class="ml-3 relative">
          <x-dropdown align="right">
            <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
              </button>
              @else
              <span class="inline-flex rounded-md">
                <button type="button" class="inline items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150 w-40">
                  {{ Auth::user()->name }}

                  <svg class="m-auto w-full h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                  </svg>
                </button>
              </span>
              @endif
            </x-slot>

            <x-slot name="content">
              <!-- Account Management -->
              <x-dropdown-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
              </x-dropdown-link>

              <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Manage Account') }}
              </div>

              <x-dropdown-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                {{ __('Profile') }}
              </x-dropdown-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
              <x-dropdown-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                {{ __('API Tokens') }}
              </x-dropdown-link>
              @endif

              <div class="border-t border-gray-200 dark:border-gray-600"></div>

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();" :active="request()->routeIs('logout')">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </x-slot>
          </x-dropdown>
        </div>
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <!-- Creation -->
      <x-responsive-nav-link>
        {{ __('Creation') }}
      </x-responsive-nav-link>
      <!-- System -->
      <x-responsive-nav-link>
        {{ __('Systems') }}
      </x-responsive-nav-link>
      <!-- Database -->
      <x-responsive-nav-link>
        {{ __('Database') }}
      </x-responsive-nav-link>
      <!-- Management -->
      <x-responsive-nav-link>
        {{ __('Management') }}
      </x-responsive-nav-link>
      <!-- Commercial -->
      <x-responsive-nav-link>
        {{ __('Commercial') }}
      </x-responsive-nav-link>
      <!-- Logistics -->
      <x-responsive-nav-link>
        {{ __('Logistics') }}
      </x-responsive-nav-link>
      <!-- Operative -->
      <x-responsive-nav-link>
        {{ __('Operative') }}
      </x-responsive-nav-link>
      <!-- Financial -->
      <x-responsive-nav-link>
        {{ __('Financial') }}
      </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
      <div class="flex items-center px-4">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div class="shrink-0 mr-3">
          <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </div>
        @endif

        <div>
          <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
          <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>
      </div>

      <div class="mt-3 space-y-1">
        <!-- Dashboard -->
        <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
          {{ __('Dashboard') }}
        </x-responsive-nav-link>
        <!-- Account Management -->
        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
          {{ __('API Tokens') }}
        </x-responsive-nav-link>
        @endif

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf

          <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>

        <!-- Team Management -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
        <div class="border-t border-gray-200 dark:border-gray-600"></div>

        <div class="block px-4 py-2 text-xs text-gray-400">
          {{ __('Manage Team') }}
        </div>

        <!-- Team Settings -->
        <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
          {{ __('Team Settings') }}
        </x-responsive-nav-link>

        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
          {{ __('Create New Team') }}
        </x-responsive-nav-link>
        @endcan

        <!-- Team Switcher -->
        @if (Auth::user()->allTeams()->count() > 1)
        <div class="border-t border-gray-200 dark:border-gray-600"></div>

        <div class="block px-4 py-2 text-xs text-gray-400">
          {{ __('Switch Teams') }}
        </div>

        @foreach (Auth::user()->allTeams() as $team)
        <x-switchable-team :team="$team" component="responsive-nav-link" />
        @endforeach
        @endif
        @endif
      </div>
    </div>
  </div>
</nav>