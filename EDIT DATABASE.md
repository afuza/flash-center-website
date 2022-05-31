<?
/*
@ Theme Admin Panel By : Hyper 
@ Create By AFUZA PRATAMA ( Date : 03-16-2021 ) 
@ SISTEM INFROMASI JASA PEMESANAN FLASHING ONLINE HP ANDROID BERBASIS WEB
@ Source : SKIPSI POTENSI UTAMA ( 1613000198 )
*/

Lokasi Folder :

├───database
└───fuction
    ├───.well-known
    │   └───pki-validation
    ├───cgi-bin
    ├───file
    ├───image
    ├───js
    ├───pdf
    │   ├───composer
    │   ├───mpdf
    │   │   └───mpdf
    │   │       ├───.github
    │   │       ├───data
    │   │       │   ├───collations
    │   │       │   ├───font
    │   │       │   ├───iccprofiles
    │   │       │   └───patterns
    │   │       ├───src
    │   │       │   ├───Barcode
    │   │       │   ├───Color
    │   │       │   ├───Config
    │   │       │   ├───Conversion
    │   │       │   ├───Css
    │   │       │   ├───Exception
    │   │       │   ├───Fonts
    │   │       │   ├───Gif
    │   │       │   ├───Image
    │   │       │   ├───Language
    │   │       │   ├───Log
    │   │       │   ├───Output
    │   │       │   ├───Pdf
    │   │       │   │   └───Protection
    │   │       │   ├───Shaper
    │   │       │   ├───Tag
    │   │       │   ├───Utils
    │   │       │   └───Writer
    │   │       ├───tmp
    │   │       │   └───ttfontdata
    │   │       └───ttfonts
    │   ├───myclabs
    │   │   └───deep-copy
    │   │       ├───doc
    │   │       ├───fixtures
    │   │       │   ├───f001
    │   │       │   ├───f002
    │   │       │   ├───f003
    │   │       │   ├───f004
    │   │       │   ├───f005
    │   │       │   ├───f006
    │   │       │   ├───f007
    │   │       │   └───f008
    │   │       └───src
    │   │           └───DeepCopy
    │   │               ├───Exception
    │   │               ├───Filter
    │   │               │   └───Doctrine
    │   │               ├───Matcher
    │   │               │   └───Doctrine
    │   │               ├───Reflection
    │   │               ├───TypeFilter
    │   │               │   ├───Date
    │   │               │   └───Spl
    │   │               └───TypeMatcher
    │   ├───paragonie
    │   │   └───random_compat
    │   │       ├───dist
    │   │       └───lib
    │   ├───psr
    │   │   └───log
    │   │       └───Psr
    │   │           └───Log
    │   │               └───Test
    │   └───setasign
    │       └───fpdi
    │           └───src
    │               ├───PdfParser
    │               │   ├───CrossReference
    │               │   ├───Filter
    │               │   └───Type
    │               ├───PdfReader
    │               │   └───DataStructure
    │               ├───Tcpdf
    │               └───Tfpdf
    ├───sms
    │   └───vendor
    │       ├───composer
    │       └───twilio
    │           └───sdk
    │               └───src
    │                   └───Twilio
    │                       ├───Exceptions
    │                       ├───Http
    │                       ├───Jwt
    │                       │   ├───Client
    │                       │   ├───Grants
    │                       │   └───TaskRouter
    │                       ├───Rest
    │                       │   ├───Accounts
    │                       │   │   └───V1
    │                       │   │       └───Credential
    │                       │   ├───Api
    │                       │   │   └───V2010
    │                       │   │       └───Account
    │                       │   │           ├───Address
    │                       │   │           ├───AvailablePhoneNumberCountry
    │                       │   │           ├───Call
    │                       │   │           ├───Conference
    │                       │   │           ├───IncomingPhoneNumber
    │                       │   │           │   └───AssignedAddOn
    │                       │   │           ├───Message
    │                       │   │           ├───Queue
    │                       │   │           ├───Recording
    │                       │   │           │   └───AddOnResult
    │                       │   │           ├───Sip
    │                       │   │           │   ├───CredentialList
    │                       │   │           │   ├───Domain
    │                       │   │           │   │   └───AuthTypes
    │                       │   │           │   │       ├───AuthTypeCalls
    │                       │   │           │   │       └───AuthTypeRegistrations
    │                       │   │           │   └───IpAccessControlList
    │                       │   │           └───Usage
    │                       │   │               └───Record
    │                       │   ├───Autopilot
    │                       │   │   └───V1
    │                       │   │       └───Assistant
    │                       │   │           ├───FieldType
    │                       │   │           └───Task
    │                       │   ├───Bulkexports
    │                       │   │   └───V1
    │                       │   │       └───Export
    │                       │   ├───Chat
    │                       │   │   ├───V1
    │                       │   │   │   └───Service
    │                       │   │   │       ├───Channel
    │                       │   │   │       └───User
    │                       │   │   └───V2
    │                       │   │       └───Service
    │                       │   │           ├───Channel
    │                       │   │           └───User
    │                       │   ├───Conversations
    │                       │   │   └───V1
    │                       │   │       ├───Configuration
    │                       │   │       ├───Conversation
    │                       │   │       │   └───Message
    │                       │   │       └───Service
    │                       │   │           ├───Configuration
    │                       │   │           └───Conversation
    │                       │   │               └───Message
    │                       │   ├───Events
    │                       │   │   └───V1
    │                       │   │       ├───Schema
    │                       │   │       ├───Sink
    │                       │   │       └───Subscription
    │                       │   ├───Fax
    │                       │   │   └───V1
    │                       │   │       └───Fax
    │                       │   ├───FlexApi
    │                       │   │   └───V1
    │                       │   ├───Insights
    │                       │   │   └───V1
    │                       │   │       ├───Call
    │                       │   │       └───Room
    │                       │   ├───IpMessaging
    │                       │   │   ├───V1
    │                       │   │   │   └───Service
    │                       │   │   │       ├───Channel
    │                       │   │   │       └───User
    │                       │   │   └───V2
    │                       │   │       └───Service
    │                       │   │           ├───Channel
    │                       │   │           └───User
    │                       │   ├───Lookups
    │                       │   │   └───V1
    │                       │   ├───Messaging
    │                       │   │   └───V1
    │                       │   │       └───Service
    │                       │   ├───Monitor
    │                       │   │   └───V1
    │                       │   ├───Notify
    │                       │   │   └───V1
    │                       │   │       └───Service
    │                       │   ├───Numbers
    │                       │   │   └───V2
    │                       │   │       └───RegulatoryCompliance
    │                       │   │           └───Bundle
    │                       │   ├───Preview
    │                       │   │   ├───BulkExports
    │                       │   │   │   └───Export
    │                       │   │   ├───DeployedDevices
    │                       │   │   │   └───Fleet
    │                       │   │   ├───HostedNumbers
    │                       │   │   │   └───AuthorizationDocument
    │                       │   │   ├───Marketplace
    │                       │   │   │   ├───AvailableAddOn
    │                       │   │   │   └───InstalledAddOn
    │                       │   │   ├───Sync
    │                       │   │   │   └───Service
    │                       │   │   │       ├───Document
    │                       │   │   │       ├───SyncList
    │                       │   │   │       └───SyncMap
    │                       │   │   ├───TrustedComms
    │                       │   │   │   └───BrandedChannel
    │                       │   │   ├───Understand
    │                       │   │   │   └───Assistant
    │                       │   │   │       ├───FieldType
    │                       │   │   │       └───Task
    │                       │   │   └───Wireless
    │                       │   │       └───Sim
    │                       │   ├───Pricing
    │                       │   │   ├───V1
    │                       │   │   │   ├───Messaging
    │                       │   │   │   ├───PhoneNumber
    │                       │   │   │   └───Voice
    │                       │   │   └───V2
    │                       │   │       └───Voice
    │                       │   ├───Proxy
    │                       │   │   └───V1
    │                       │   │       └───Service
    │                       │   │           └───Session
    │                       │   │               └───Participant
    │                       │   ├───Serverless
    │                       │   │   └───V1
    │                       │   │       └───Service
    │                       │   │           ├───Asset
    │                       │   │           ├───Build
    │                       │   │           ├───Environment
    │                       │   │           └───TwilioFunction
    │                       │   │               └───FunctionVersion
    │                       │   ├───Studio
    │                       │   │   ├───V1
    │                       │   │   │   └───Flow
    │                       │   │   │       ├───Engagement
    │                       │   │   │       │   └───Step
    │                       │   │   │       └───Execution
    │                       │   │   │           └───ExecutionStep
    │                       │   │   └───V2
    │                       │   │       └───Flow
    │                       │   │           └───Execution
    │                       │   │               └───ExecutionStep
    │                       │   ├───Supersim
    │                       │   │   └───V1
    │                       │   │       └───NetworkAccessProfile
    │                       │   ├───Sync
    │                       │   │   └───V1
    │                       │   │       └───Service
    │                       │   │           ├───Document
    │                       │   │           ├───SyncList
    │                       │   │           ├───SyncMap
    │                       │   │           └───SyncStream
    │                       │   ├───Taskrouter
    │                       │   │   └───V1
    │                       │   │       └───Workspace
    │                       │   │           ├───Task
    │                       │   │           ├───TaskQueue
    │                       │   │           ├───Worker
    │                       │   │           └───Workflow
    │                       │   ├───Trunking
    │                       │   │   └───V1
    │                       │   │       └───Trunk
    │                       │   ├───Trusthub
    │                       │   │   └───V1
    │                       │   │       ├───CustomerProfiles
    │                       │   │       └───TrustProducts
    │                       │   ├───Verify
    │                       │   │   └───V2
    │                       │   │       └───Service
    │                       │   │           ├───Entity
    │                       │   │           └───RateLimit
    │                       │   ├───Video
    │                       │   │   └───V1
    │                       │   │       └───Room
    │                       │   │           └───Participant
    │                       │   ├───Voice
    │                       │   │   └───V1
    │                       │   │       ├───ConnectionPolicy
    │                       │   │       └───DialingPermissions
    │                       │   │           └───Country
    │                       │   └───Wireless
    │                       │       └───V1
    │                       │           └───Sim
    │                       ├───Security
    │                       ├───TaskRouter
    │                       └───TwiML
    │                           ├───Fax
    │                           ├───Messaging
    │                           ├───Video
    │                           └───Voice
    └───vendor
        ├───composer
        └───phpmailer
            └───phpmailer
                ├───language
                └───src


?>