@if(isset($submissions))
@foreach($submissions as $key => $submission)
NAME {{ $submission->name }}
ADDR {{ $submission->adr2 }}
ADR1 {{ $submission->adr1 }}
CITY {{ $submission->city }}
STAE {{ $submission->stae }}
POST {{ $submission->post }}
CTRY {{ $submission->ctry }}
PHON {{ $submission->phon }}
@endforeach
@endif
@if(isset($people))
@foreach($people as $key => $person)
NAME {{ $person->name }}
SURN {{ $person->surn }}
GIVN {{ $person->givn }}
SEX {{ $person->sex }}
BIRT {{ $person->surn }}
DATE {{ $person->surn }}
PLAC {{ $person->birthday_plac }}
FAMS {{ $person->fams }}
FAMS {{ $person->famc }}
PLAC {{ $person->deathday_plac }}
BURI {{ $person->surn }}
PLAC {{ $person->burial_day_plac }}
@endforeach
@endif